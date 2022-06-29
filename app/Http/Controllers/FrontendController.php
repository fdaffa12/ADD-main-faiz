<?php

namespace App\Http\Controllers;

use App\Developer;
use App\Category;
use App\CategoryItem;
use App\Customer;
use App\Listing;
use App\Setting;
use App\Post;
use App\Primary;
use App\PrimaryItem;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class FrontendController extends Controller
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
        $banners = Post::where('postcat_id', 'LIKE', '%3%')->orderby('id', 'DESC')->paginate(1);
        $ads = Post::where('post_title', 'Ads')->orderby('id', 'DESC')->paginate(1);
        $data = Developer::orderBy('created_at', 'desc')->get();
        $primary = Primary::orderBy('created_at', 'desc')->where('status', '2')->paginate(3);
        // $secondary = Category::orderBy('created_at', 'desc')->where('status', '1')->paginate(3);
        $iklan = Post::where('postcat_id', 15)->get();

        $secondary = Category::whereHas('listing', function ($q) {
            $q->where('jenis_listing', 'Exclusive');
        })->paginate(3);

        return view('front.home', compact('banners', 'data', 'secondary', 'ads', 'primary', 'iklan'));
    }


    public function dashboardev()
    {
        $data = Developer::orderBy('created_at', 'desc')->where('status', '1')->paginate(3, ['*'], 'data');
        $subdata = Developer::orderBy('created_at', 'desc')->where('status', '0')->paginate(3, ['*'], 'subdata');

        $developer = Developer::orderBy('created_at', 'desc')->paginate(6);

        return view('front.catadev', compact('data', 'developer', 'subdata'));
    }

    public function dashboarsec()
    {
        $secondary = Category::orderBy('created_at', 'desc')->where('status', '1')->paginate(2);

        return view('front.catacont', compact('secondary'));
    }

    public function devitem($id)
    {
        $categoryitems = Primary::where('dev_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Developer::find($id);

        return view('front.dev-item', compact('categoryitems', 'data'));
    }

    public function detail($title)
    {


        $data = Primary::where('title', $title)->first();
        $categoryitems = PrimaryItem::where('primary_id', $data->id)->orderBy('created_at', 'desc')->get();
        $highlight = Primary::orderBy('created_at', 'desc')->where('status', '2')->paginate(3);

        return view('front.catadet', compact('categoryitems', 'data', 'highlight'));
    }

    public function detailsec($id)
    {
        $categoryitems = CategoryItem::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Category::where('id', $id)->first();

        return view('front.catadetsec', compact('categoryitems', 'data'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $keyword = $request->input('keyword');
        $kategori = $request->input('kategori');
        $query = Primary::orderBy('kategori', 'asc');
        if ($request->search) {
            // This will only execute if you received any search
            $query = $query->where('title', 'like', '%' . $search . '%');
        }
        if ($request->keyword) {
            // This will only execute if you received any keyword
            $query = $query->where('type', 'like', '%' . $keyword . '%');
        }
        if ($request->kategori) {
            // This will only execute if you received any kategori
            $query = $query->where('kategori', 'like', '%' . $kategori . '%');
        }
        if ($request->min_price && $request->max_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '>=', $request->min_price);
            $query = $query->where('harga', '<=', $request->max_price);
        }
        if ($request->min_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '>=', $request->min_price);
        }
        if ($request->max_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '<=', $request->max_price);
        }
        $primary = $query->paginate(6);


        $highlight = Primary::orderBy('created_at', 'desc')->where('status', '2')->paginate(3);

        return view('front.show', compact('primary', 'highlight'));
    }

    public function kebijakan()
    {
        return view('front.kebijakan');
    }

    public function allPro(Request $request)
    {
        // $primary = Primary::orderby('kategori', 'asc')->paginate(6, ['*'], 'primary');

        $keyword = $request->input('keyword');
        $kategori = $request->input('kategori');
        $query = Primary::orderBy('kategori', 'asc');
        if ($request->keyword) {
            // This will only execute if you received any keyword
            $query = $query->where('type', 'like', '%' . $keyword . '%');
        }
        if ($request->kategori) {
            // This will only execute if you received any kategori
            $query = $query->where('kategori', 'like', '%' . $kategori . '%');
        }
        if ($request->min_price && $request->max_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '>=', $request->min_price);
            $query = $query->where('harga', '<=', $request->max_price);
        }
        if ($request->min_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '>=', $request->min_price);
        }
        if ($request->max_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '<=', $request->max_price);
        }
        $primary = $query->paginate(6);


        $highlight = Primary::orderBy('created_at', 'desc')->where('status', '2')->paginate(3);


        return view('front.all-pro', compact('primary', 'highlight', 'query'));
    }

    public function allSecPro(Request $request)
    {
        $keyword = $request->input('keyword');
        $kategori = $request->input('kategori');
        $query = Primary::where('kategori', 'bekas');
        if ($request->keyword) {
            // This will only execute if you received any keyword
            $query = $query->where('type', 'like', '%' . $keyword . '%');
        }
        if ($request->kategori) {
            // This will only execute if you received any kategori
            $query = $query->where('kategori', 'like', '%' . $kategori . '%');
        }
        if ($request->min_price && $request->max_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '>=', $request->min_price);
            $query = $query->where('harga', '<=', $request->max_price);
        }
        if ($request->min_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '>=', $request->min_price);
        }
        if ($request->max_price) {
            // This will only execute if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('harga', '<=', $request->max_price);
        }
        $primary = $query->paginate(6);


        $highlight = Primary::orderBy('created_at', 'desc')->where('status', '2')->paginate(3);

        return view('front.all-secpro', compact('primary', 'highlight', 'query'));
    }

    public function postCustomer(Request $request)
    {
        $request->validate([
            'nohp' => 'required',
        ]);

        $data['nama_cus'] = $request->nama_cus;
        $data['nohp'] = $request->nohp;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Customer::insert($data);

        return redirect()->back();
    }
}