<?php

namespace App\Http\Controllers;

use App\Developer;
use App\Primary;
use App\PrimaryItem;
use App\Listing;
use Illuminate\Http\Request;
use Response;

class PrimaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        if (!empty($request->search)) {
            $search = $request->search;
            $primaries = Primary::where('title', 'LIKE', '%' . $search . '%')->orWhere('description', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'desc')->paginate(7);
            return view('backend.primary.index')->with('primaries', $primaries);
        }
        $primaries = Primary::orderBy('created_at', 'desc')->paginate(7);

        return view('backend.primary.index')->with('primaries', $primaries);
    }

    public function primary(Request $request)
    {
        $primaries = Primary::orderBy('id', 'desc')->get();
        $developer = Developer::orderBy('id', 'desc')->get();
        $listing = Listing::orderBy('nama_pemilik', 'asc')->get();
        return view('backend.primary.primary', compact('developer', 'primaries', 'listing'));
    }

    public function add()
    {
        $developer = Developer::orderBy('nama_dev', 'asc')->get();
        $listing = Listing::orderBy('nama_pemilik', 'asc')->get();
        return view('backend.primary.adddev', compact('developer', 'listing'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'body',
            'fasilitas' => 'required',
            'lb' => 'required',
            'lt' => 'required',
            'kt' => 'required',
            'km' => 'required',
            'kategori' => 'required',
            'type',
            'lokasi' => 'required',
            'harga' => 'required',
            'image' => 'required',
            'cover_image' => 'required'
        ]);


        $category = new Primary();
        $file = $request->file('image');
        if ($file) {
            $file->move('uploads/gallery', $file->getClientOriginalName());
            $category['image'] = 'uploads/gallery/' . $file->getClientOriginalName();
        }
        $category->title = $request->input('title');
        $category->dev_id = $request->input('dev_id');
        $category->list_id = $request->input('list_id');
        $category->description = $request->input('body');
        $category->fasilitas = $request->input('fasilitas');
        $category->lb = $request->input('lb');
        $category->lt = $request->input('lt');
        $category->kt = $request->input('kt');
        $category->km = $request->input('km');
        $category->type = $request->input('type');
        $category->kategori = $request->input('kategori');
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

            PrimaryItem::create([
                'primary_id' => $category->id,
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
        $data = Primary::find($id);
        $developer = Developer::orderBy('nama_dev', 'asc')->get();

        return view('backend.primary.edit', compact('data', 'developer'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description',
            'fasilitas' => 'required',
            'type',
            'lokasi' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['fasilitas'] = $request->fasilitas;
        $data['type'] = $request->type;
        $data['dev_id'] = $request->dev_id;
        $data['list_id'] = $request->list_id;
        $data['kategori'] = $request->kategori;
        $data['lokasi'] = $request->lokasi;
        $data['harga'] = $request->harga;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $file = $request->file('image');
        if ($file) {
            $file->move('uploads/gallery', $file->getClientOriginalName());
            $data['image'] = 'uploads/gallery/' . $file->getClientOriginalName();
        }

        Primary::where('id', $request->id)->update($data);

        return Response::json($data);
    }

    public function getPrimary()
    {
        $primaries = Primary::orderBy('id', 'desc')->get();
        $developer = Developer::orderBy('id', 'desc')->get();
        $data = \View::make('backend.primary.all_primary', ['primaries' => $primaries, 'developer' => $developer])->render();
        return response()->json(['code' => 1, 'result' => $data]);
    }

    public function getSecondary()
    {
        $primaries = Primary::orderBy('id', 'desc')->where('kategori', 'bekas')->get();
        $developer = Developer::orderBy('id', 'desc')->get();
        $data = \View::make('backend.primary.all_secondary', ['primaries' => $primaries, 'developer' => $developer])->render();
        return response()->json(['code' => 1, 'result' => $data]);
    }

    public function delete($id)
    {

        $image = Primary::findOrFail($id);
        $img_one = $image->image;
        unlink($img_one);

        Primary::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Sukses Menghapus');
    }

    public function draft($id)
    {
        Primary::findOrFail($id)->update(['status' => 0]);
        return redirect()->back()->withToastWarning('Berhasil Dimasukan Ke Dalam Draft');
    }

    public function publish($id)
    {
        Primary::findOrFail($id)->update(['status' => 1]);
        return redirect()->back()->withToastInfo('Berhasil Dipublish');
    }

    public function highlight($id)
    {
        Primary::findOrFail($id)->update(['status' => 2]);
        return redirect()->back()->withToastInfo('Berhasil Dipublish');
    }

    public function fasility($id)
    {
        //
        $primary = Primary::find($id);
        return response()->json($primary);
    }

    public function editDetail($id)
    {
        $primary = Primary::find($id);
        return response()->json($primary);
    }

    public function detail($id)
    {
        //
        $detail = Primary::find($id);
        return response()->json($detail);
    }

    public function updateFasility(Request $request)
    {
        $primary = Primary::find($request->id);
        $primary->kt = $request->kt;
        $primary->km = $request->km;
        $primary->lt = $request->lt;
        $primary->lb = $request->lb;
        $primary->save();

        return Response::json($primary);
    }
}