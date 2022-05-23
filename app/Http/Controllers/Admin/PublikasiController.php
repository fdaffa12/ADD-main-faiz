<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Publikasi;
use App\Post;
use Carbon\Carbon;
use Response;

class PublikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $publikasi = Publikasi::latest()->get();
        return view('backend.publikasi.index', compact('publikasi'));
    }

    public function addpublikasi()
    {
        return view('backend.publikasi.add-publikasi');
    }

    public function StorePublikasi(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Publikasi::insert([
            'nama' => $request->nama,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Publikasi Successfully Added');
    }

    public function edit($id)
    {
        $publikasi = Publikasi::find($id);
        return view('backend.publikasi.edit', compact('publikasi'));
    }

    public function update(Request $request)
    {
        $publikasi_id = $request->id;

        Publikasi::find($publikasi_id)->update([
            'nama' => $request->nama,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('publikasi')->with('success', 'Data Updated');
    }

    public function destroy($publikasi_id)
    {
        Publikasi::find($publikasi_id)->delete();
        return redirect()->back()->with('warning', 'Category deleted');
    }

    public function draft($publikasi_id)
    {
        Publikasi::findOrFail($publikasi_id)->update(['status' => 0]);
        return redirect()->back()->withToastWarning('Berhasil Dimasukan Ke Dalam Draft');
    }

    public function publish($publikasi_id)
    {
        Publikasi::findOrFail($publikasi_id)->update(['status' => 1]);
        return redirect()->back()->withToastInfo('Berhasil Dipublish');
    }

    public function addPost()
    {
        $publikasi = Publikasi::orderBy('nama', 'asc')->get();
        return view('backend.publikasi.add-post', compact('publikasi'));
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'post_title' => 'required|max:255',
            'description' => 'required',
            'postcat_id' => 'required',
        ], [
            'postcat_id.required' => 'Select categori name',
        ]);



        $post = new Post();
        $post['post_title'] = $request->post_title;
        $post['description'] = $request->description;
        $post['postcat_id'] = $request->postcat_id;
        $post['post_slug'] = strtolower(str_replace(' ', '-', $request->post_title));
        $post['created_at'] = date('Y-m-d H:i:s');
        $post['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('image');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $post['image'] = 'uploads/' . $file->getClientOriginalName();
        }

        $post->save();

        return Response::json($post);
    }

    public function fetchProducts()
    {
        $Posts = Post::orderBy('id', 'desc')->get();
        $data = \View::make('backend.publikasi.all_products')->with('posts', $Posts)->render();
        return response()->json(['code' => 1, 'result' => $data]);
    }

    public function editPostAjax(Request $request)
    {
        $posts = Post::find($request->post_id);
        return response()->json(['code' => 1, 'result' => $posts]);
    }

    public function managePost()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $publikasi = Publikasi::orderBy('nama', 'asc')->get();

        return view('backend.publikasi.manage-post', compact('posts', 'publikasi'));
    }

    public function editPost($post_id)
    {
        $post = Post::find($post_id);
        $publikasis = Publikasi::latest()->get();

        return view('backend.publikasi.edit-post', compact('post', 'publikasis'));
    }

    public function updatePost(Request $request)
    {
        $request->validate([
            'post_title' => 'required|max:255',
            'description' => 'required',
            'postcat_id' => 'required',
        ], [
            'postcat_id.required' => 'Select categori name',
        ]);

        $data['post_title'] = $request->post_title;
        $data['description'] = $request->description;
        $data['postcat_id'] = $request->postcat_id;
        $data['post_slug'] = strtolower(str_replace(' ', '-', $request->post_title));
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('image');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['image'] = 'uploads/' . $file->getClientOriginalName();
        }

        Post::where('id', $request->id)->update($data);

        return redirect()->back()->with('success', 'Successfully Updated');
    }

    public function destroyPost($post_id)
    {
        Post::find($post_id)->delete();
        return redirect()->back()->with('warning', 'Category deleted');
    }

    public function draftPost($post_id)
    {
        Post::findOrFail($post_id)->update(['status' => 0]);
        return redirect()->back()->withToastWarning('Berhasil Dimasukan Ke Dalam Draft');
    }

    public function publishPost($post_id)
    {
        Post::findOrFail($post_id)->update(['status' => 1]);
        return redirect()->back()->withToastInfo('Berhasil Dipublish');
    }
}