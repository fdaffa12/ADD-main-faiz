<?php

namespace App\Http\Controllers;

use App\PrimaryItem;
use Illuminate\Http\Request;

class PrimaryItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {

        $primaryitems = PrimaryItem::where('primary_id', $id)->orderBy('created_at', 'desc')->paginate(6);

        return view('backend.primary.view.images')->with([
            'primaryitems' => $primaryitems,
            'id' => $id
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        $primary_id = $request->id;

        $image = new PrimaryItem;

        //saving a file
        if ($request->hasFile('cover_image')) {

            //get filename with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get file name only

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get extension of file
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            //upload image
            $path = $request->cover_image->move(public_path() . '/uploads/gallery/', $fileNameToStore);

            $image->cover_image = $fileNameToStore;

            $image->primary_id = $primary_id;

            $image->save();
        }
        return back();
    }

    public function update(Request $request)
    {

        $this->validate($request, [
            'id' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $id = $request->id;
        $image = PrimaryItem::find($id);

        //saving a file
        if ($request->hasFile('cover_image')) {

            //get filename with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get file name only

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get extension of file
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            //upload image
            $path = $request->cover_image->move(public_path() . '/uploads/gallery/', $fileNameToStore);
            $image->cover_image = $fileNameToStore;
            $image->update();
        }

        return back();
    }

    //delete category item images
    public function delete($id)
    {
        $image = PrimaryItem::findOrFail($id);
        $img_one = $image->cover_image;
        unlink("uploads/gallery/" . $img_one);

        PrimaryItem::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Sukses Menghapus');
    }
}