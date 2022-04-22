<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\CategoryItem;
use App\Developer;
use App\Listing;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        if (!empty($request->search)) {
            $search = $request->search;
            $categories = Category::where('title', 'LIKE', '%' . $search . '%')->orWhere('description', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'desc')->paginate(7);
            return view('backend.gallery.index')->with('categories', $categories);
        }
        $categories = Category::orderBy('created_at', 'desc')->paginate(7);

        return view('backend.gallery.index')->with('categories', $categories);
    }

    public function add()
    {
        $listing = Listing::orderBy('nama_pemilik', 'asc')->get();
        return view('backend.gallery.adddev')->with('listing', $listing);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'body',
            'fasilitas' => 'required',
            'lb' => 'required',
            'lt' => 'required',
            'type',
            'lokasi' => 'required',
            'harga' => 'required',
            'image' => 'required',
            'cover_image' => 'required'
        ], [
            'list_id.required' => 'Select developer name',
        ]);


        $category = new Category;
        $file = $request->file('image');
        if ($file) {
            $file->move('uploads/gallery', $file->getClientOriginalName());
            $category['image'] = 'uploads/gallery/' . $file->getClientOriginalName();
        }
        $category->title = $request->input('title');
        $category->list_id = $request->input('list_id');
        $category->description = $request->input('body');
        $category->fasilitas = $request->input('fasilitas');
        $category->lb = $request->input('lb');
        $category->lt = $request->input('lt');
        $category->type = $request->input('type');
        $category->lokasi = $request->input('lokasi');
        $category->harga = $request->input('harga');
        $category->save();

        //stores data in public/cover_image/original
        foreach ($request->cover_image as $photo) {
            $fileNameWithExt = $photo->getClientOriginalName();
            //get file name only
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get extension of file
            $extension = $photo->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //upload image
            $path = $photo->move(public_path() . '/uploads/gallery/', $fileNameToStore);

            CategoryItem::create([
                'category_id' => $category->id,
                'cover_image' => $fileNameToStore
            ]);
        }

        //below code stores images inside storage/app/cover_image/image which is not accessable publicly
        /*foreach ($request->cover_image as $photo) {
            $filename = $photo->store('cover_image/original');
            $newfilename=str_replace('/','',$filename);
            CategoryItem::create([
                'category_id' => $category->id,
                'cover_image' => $newfilename
            ]);
        }*/


        return redirect()->back()->with('success', 'Gallery Successfully Added');
    }

    public function getByID($id)
    {
        $data = Category::find($id);
        $listing = Listing::orderBy('nama_pemilik', 'asc')->get();

        return view('backend.gallery.edit', compact('data', 'listing'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description',
            'fasilitas' => 'required',
            'lt' => 'required',
            'lb' => 'required',
            'type',
            'lokasi' => 'required',
            'harga' => 'required',
        ], [
            'list_id.required' => 'Select developer name',
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['fasilitas'] = $request->fasilitas;
        $data['lt'] = $request->lt;
        $data['lb'] = $request->lb;
        $data['type'] = $request->type;
        $data['list_id'] = $request->list_id;
        $data['lokasi'] = $request->lokasi;
        $data['harga'] = $request->harga;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $file = $request->file('image');
        if ($file) {
            $file->move('uploads/gallery', $file->getClientOriginalName());
            $data['image'] = 'uploads/gallery/' . $file->getClientOriginalName();
        }

        Category::where('id', $request->id)->update($data);

        return redirect()->back()->with('success', 'Gallery Updated');
    }

    public function delete($id)
    {

        $image = Category::findOrFail($id);
        $img_one = $image->image;
        unlink($img_one);

        Category::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Sukses Menghapus');
    }

    public function draft($gallery_id)
    {
        Category::findOrFail($gallery_id)->update(['status' => 0]);
        return redirect()->back()->withToastWarning('Berhasil Dimasukan Ke Dalam Draft');
    }

    public function publish($gallery_id)
    {
        Category::findOrFail($gallery_id)->update(['status' => 1]);
        return redirect()->back()->withToastInfo('Berhasil Dipublish');
    }
}