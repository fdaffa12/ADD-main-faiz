<?php

namespace App\Http\Controllers;

use App\Post;
use App\Setting;
use App\Category;
use App\Struktur;
use App\CategoryItem;
use App\Developer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
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
        view()->share(['setting' => $setting, 'icons' => $icons]);
    }

    public function index()
    {
        $banners = Post::where('postcat_id', 'LIKE', '%3%')->orderby('id', 'DESC')->get();
        $data = Category::orderBy('created_at', 'desc')->paginate(3);
        return view('frontend.index', compact('banners', 'data'));
    }

    public function book()
    {
        return view('frontend.book');
    }

    public function gallery()
    {
        $data = Category::orderBy('created_at', 'desc')->paginate(7);

        return view('frontend.gallery', compact('data'));
    }

    public function developer()
    {
        $data = Developer::orderBy('created_at', 'desc')->paginate(7);

        return view('frontend.developer', compact('data'));
    }

    public function gallerydev($id)
    {
        $categoryitems = Category::where('dev_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Developer::find($id);

        return view('frontend.gallery-developer', compact('categoryitems', 'data'));
    }

    public function galleryitem($id)
    {
        $categoryitems = CategoryItem::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $data = Category::where('id', $id)->first();

        return view('frontend.gallery-item', compact('categoryitems', 'data'));
    }

    public function about()
    {
        $data = Setting::first();
        if ($data) {
            $data->social = explode(',', $data->social);
        }
        $struktur = Struktur::orderBy('id', 'desc')->get();

        return view('frontend.about', compact('data', 'struktur'));
    }
}