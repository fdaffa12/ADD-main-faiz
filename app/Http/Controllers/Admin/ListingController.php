<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listing = Listing::latest()->get();
        return view('backend.listing.index', compact('listing'));
    }

    public function add()
    {
        return view('backend.listing.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'ktp' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'unit' => 'required',
            'sertifikat' => 'required',
            'lb' => 'required',
            'lt' => 'required',
            'alamat_unit' => 'required',
            'spesifikasi' => 'required',
            'harga' => 'required',
            'nego' => 'required',
            'ketentuan' => 'required',
            'no_listing' => 'required',
            'jenis_listing' => 'required',
            'marketing' => 'required',
            'referal' => 'required',
        ]);

        $data['nama_pemilik'] = $request->nama_pemilik;
        $data['ktp'] = $request->ktp;
        $data['alamat'] = $request->alamat;
        $data['nohp'] = $request->nohp;
        $data['unit'] = $request->unit;
        $data['sertifikat'] = $request->sertifikat;
        $data['lb'] = $request->lb;
        $data['lt'] = $request->lt;
        $data['alamat_unit'] = $request->alamat_unit;
        $data['spesifikasi'] = $request->spesifikasi;
        $data['harga'] = $request->harga;
        $data['nego'] = $request->nego;
        $data['ketentuan'] = $request->ketentuan;
        $data['no_listing'] = $request->no_listing;
        $data['jenis_listing'] = $request->jenis_listing;
        $data['marketing'] = $request->marketing;
        $data['referal'] = $request->referal;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('gambar');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['gambar'] = 'uploads/' . $file->getClientOriginalName();
        }

        Listing::insert($data);
        // dd($request->all());

        return redirect()->back()->with('success', 'Listing Added');
    }

    public function edit($listing_id)
    {
        $list = Listing::find($listing_id);

        return view('backend.listing.edit', compact('list'));
    }

    public function updatelist(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'ktp' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'unit' => 'required',
            'sertifikat' => 'required',
            'lb' => 'required',
            'lt' => 'required',
            'alamat_unit' => 'required',
            'spesifikasi' => 'required',
            'harga' => 'required',
            'nego' => 'required',
            'ketentuan' => 'required',
            'no_listing' => 'required',
            'jenis_listing' => 'required',
            'marketing' => 'required',
            'referal' => 'required',
        ]);

        $data['nama_pemilik'] = $request->nama_pemilik;
        $data['ktp'] = $request->ktp;
        $data['alamat'] = $request->alamat;
        $data['nohp'] = $request->nohp;
        $data['unit'] = $request->unit;
        $data['sertifikat'] = $request->sertifikat;
        $data['lb'] = $request->lb;
        $data['lt'] = $request->lt;
        $data['alamat_unit'] = $request->alamat_unit;
        $data['spesifikasi'] = $request->spesifikasi;
        $data['harga'] = $request->harga;
        $data['nego'] = $request->nego;
        $data['ketentuan'] = $request->ketentuan;
        $data['no_listing'] = $request->no_listing;
        $data['jenis_listing'] = $request->jenis_listing;
        $data['marketing'] = $request->marketing;
        $data['referal'] = $request->referal;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('gambar');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $data['gambar'] = 'uploads/' . $file->getClientOriginalName();
        }

        Listing::where('id', $request->id)->update($data);

        return redirect()->back()->with('success', 'Listing Updated');
    }

    public function destroylist($list_id)
    {
        Listing::find($list_id)->delete();
        return redirect()->back()->with('warning', 'Developer deleted');
    }
}