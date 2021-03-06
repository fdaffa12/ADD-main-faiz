<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Setting::first();
        if ($data) {
            $data->social = explode(',', $data->social);
        }

        return view('backend.setting', compact('data'));
    }

    public function store(Request $request)
    {
        // dump($request->all());
        $request->validate([
            'address' => 'required|max:255',
            'phone' => 'required|max:13',
            'fax' => 'required',
            'email' => 'required',
            'about' => 'required',
            'social' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);


        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['fax'] = $request->fax;
        $data['email'] = $request->email;
        $data['about'] = $request->about;
        $data['visi'] = $request->visi;
        $data['misi'] = $request->misi;
        $data['social'] = implode(",", $request->social);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('image');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['image'] = 'uploads/' . $file->getClientOriginalName();
        }

        //cek poto
        $file = $request->file('gambar');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['gambar'] = 'uploads/' . $file->getClientOriginalName();
        }

        Setting::insert($data);

        return redirect()->back()->with('success', 'Setting Added');
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required|max:255',
            'phone' => 'required|max:13',
            'fax' => 'required',
            'email' => 'required',
            'about' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'social' => 'required'
        ]);


        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['fax'] = $request->fax;
        $data['email'] = $request->email;
        $data['about'] = $request->about;
        $data['visi'] = $request->visi;
        $data['misi'] = $request->misi;
        $data['social'] = implode(",", $request->social);
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('image');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['image'] = 'uploads/' . $file->getClientOriginalName();
        }

        //cek poto
        $konten = $request->file('gambar');
        if ($konten) {
            $konten->move('uploads', $konten->getClientOriginalName());
            $data['gambar'] = 'uploads/' . $konten->getClientOriginalName();
        }

        Setting::where('id', $request->id)->update($data);

        return redirect()->back()->with('success', 'Setting Added');
    }
}