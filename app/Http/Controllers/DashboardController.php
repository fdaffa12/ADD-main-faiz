<?php

namespace App\Http\Controllers;

use App\Developer;
use App\Category;
use App\CategoryItem;
use App\Listing;
use App\Setting;
use App\Post;
use App\Primary;
use App\PrimaryItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $developer = Developer::orderBy('created_at', 'desc')->where('status', '1')->get();
        $subdeveloper = Developer::orderBy('created_at', 'desc')->where('status', '0')->get();
        $secondary = Category::orderBy('created_at', 'desc')->where('status', '1')->paginate(4);
        $setting = Setting::first();
        if ($setting) {
            $setting->social = explode(',', $setting->social);
            foreach ($setting->social as $social) {
                $icon = explode('.', $social);
                $icon = $icon[1];
                $icons[] = $icon;
            }
        } else {
            $icons = [];
        }
        view()->share(['setting' => $setting, 'icons' => $icons, 'developer' => $developer, 'secondary' => $secondary, 'subdeveloper' => $subdeveloper]);
    }

    public function index()
    {
        $banners = Post::where('postcat_id', 'LIKE', '%3%')->orderby('id', 'DESC')->paginate(2);
        $ads = Post::where('post_title', 'Ads')->orderby('id', 'DESC')->paginate(1);
        $data = Developer::orderBy('created_at', 'desc')->paginate(3);
        // $secondary = Category::orderBy('created_at', 'desc')->where('status', '1')->paginate(3);

        $secondary = Category::whereHas('listing', function ($q) {
            $q->where('jenis_listing', 'Exclusive');
        })->get();

        return view('dashboard.home', compact('banners', 'data', 'secondary', 'ads'));
    }


    public function dashboardev()
    {
        $data = Developer::orderBy('created_at', 'desc')->where('status', '1')->paginate(2, ['*'], 'data');
        $subdata = Developer::orderBy('created_at', 'desc')->where('status', '0')->paginate(2, ['*'], 'subdata');

        $secondary = Category::orderBy('created_at', 'desc')->where('status', '1')->paginate(2);

        return view('dashboard.catadev', compact('data', 'secondary', 'subdata'));
    }

    public function dashboarsec()
    {
        $secondary = Category::orderBy('created_at', 'desc')->where('status', '1')->paginate(2);

        return view('dashboard.catacont', compact('secondary'));
    }

    public function devitem($id)
    {
        $categoryitems = Primary::where('dev_id', $id)->where('status', '1')->orderBy('created_at', 'desc')->paginate(6);
        $data = Developer::find($id);

        return view('dashboard.dev-item', compact('categoryitems', 'data'));
    }

    public function detail($id)
    {
        $categoryitems = PrimaryItem::where('primary_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Primary::where('id', $id)->first();

        return view('dashboard.catadet', compact('categoryitems', 'data'));
    }

    public function detailsec($id)
    {
        $categoryitems = CategoryItem::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Category::where('id', $id)->first();

        return view('dashboard.catadetsec', compact('categoryitems', 'data'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryitems = Primary::where('title', 'LIKE', "%$query%")->where('status', '1')->orderby('id', 'DESC')->get();
        $cats = Category::Where('title', 'LIKE', "%$query%")->where('status', '1')->orderby('id', 'DESC')->get();
        return view('dashboard.show', compact('categoryitems', 'cats'));
    }

    public function kebijakan()
    {
        return view('dashboard.kebijakan');
    }
}