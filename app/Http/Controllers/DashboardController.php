<?php

namespace App\Http\Controllers;

use App\Developer;
use App\Category;
use App\CategoryItem;
use App\Setting;
use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $developer = Developer::orderBy('created_at', 'desc')->paginate(7);
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
        view()->share(['setting' => $setting, 'icons' => $icons, 'developer' => $developer]);
    }

    public function index()
    {
        $banners = Post::where('postcat_id', 'LIKE', '%3%')->orderby('id', 'DESC')->paginate(1);
        $data = Developer::orderBy('created_at', 'desc')->paginate(3);

        return view('dashboard.home', compact('banners', 'data'));
    }


    public function dashboardev()
    {
        $data = Developer::orderBy('created_at', 'desc')->paginate(7);

        return view('dashboard.catacont', compact('data'));
    }

    public function devitem($id)
    {
        $categoryitems = Category::where('dev_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Developer::find($id);

        return view('dashboard.dev-item', compact('categoryitems', 'data'));
    }

    public function detail($id)
    {
        $categoryitems = CategoryItem::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Category::where('id', $id)->first();

        return view('dashboard.catadet', compact('categoryitems', 'data'));
    }
}