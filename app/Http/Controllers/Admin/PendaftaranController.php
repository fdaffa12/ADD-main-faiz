<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OpenListing;

class PendaftaranController extends Controller
{
    public function storePendaftaran(Request $request)
    {
        $this->validate($request, [
            'nama_pemilik' => 'required',
            'ktp' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
        ]);

        $data['nama_pemilik'] = $request->nama_pemilik;
        $data['ktp'] = $request->ktp;
        $data['nohp'] = $request->nohp;
        $data['alamat'] = $request->alamat;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        OpenListing::insert($data);

        return redirect()->back()->with('success', 'Sukses Ditambahkan');
    }
}