<?php

namespace App\Http\Controllers\Admin;

use App\Developer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $developer = Developer::orderBy('id', 'desc')->get();
        return view('backend.dev.index', compact('developer'));
    }

    public function addDeveloper()
    {
        return view('backend.dev.add-developer');
    }

    public function storeDeveloper(Request $request)
    {
        $request->validate([
            'nama_dev' => 'required|max:255',
            'desc' => 'required',
        ]);

        $data['nama_dev'] = $request->nama_dev;
        $data['desc'] = $request->desc;
        $data['dev_slug'] = strtolower(str_replace(' ', '-', $request->nama_dev));
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('gambar');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['gambar'] = 'uploads/' . $file->getClientOriginalName();
        }

        Developer::insert($data);

        return redirect()->back()->with('success', 'Developer Added');
    }

    public function editdev($developer_id)
    {
        $developer = Developer::find($developer_id);

        return view('backend.dev.edit', compact('developer'));
    }

    public function updatedev(Request $request)
    {
        $request->validate([
            'nama_dev' => 'required|max:255',
            'desc' => 'required',
        ]);

        $data['nama_dev'] = $request->nama_dev;
        $data['desc'] = $request->desc;
        $data['dev_slug'] = strtolower(str_replace(' ', '-', $request->nama_dev));
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('gambar');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['gambar'] = 'uploads/' . $file->getClientOriginalName();
        }

        Developer::where('id', $request->id)->update($data);

        return redirect()->back()->with('success', 'Developer Updated');
    }

    public function destroydev($developer_id)
    {
        Developer::find($developer_id)->delete();
        return redirect()->back()->with('warning', 'Developer deleted');
    }

    public function draft($developer_id)
    {
        Developer::findOrFail($developer_id)->update(['status' => 0]);
        return redirect()->back()->withToastWarning('Berhasil Dimasukan Ke Dalam Draft');
    }

    public function publish($developer_id)
    {
        Developer::findOrFail($developer_id)->update(['status' => 1]);
        return redirect()->back()->withToastInfo('Berhasil Dipublish');
    }
}