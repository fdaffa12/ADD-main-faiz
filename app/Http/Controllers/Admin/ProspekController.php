<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Prospek;
use Illuminate\Http\Request;

class ProspekController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $prospek = Prospek::orderBy('id', 'desc')->get();
        return view('backend.prospek.index', compact('prospek'));
    }

    public function addProspek()
    {
        return view('backend.prospek.add');
    }

    public function storeProspek(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'alamat',
            'nohp',
            'rumah',
            'leads_by',
            'pr_status',
            'note',
        ]);

        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['nohp'] = $request->nohp;
        $data['rumah'] = $request->rumah;
        $data['leads_by'] = $request->leads_by;
        $data['pr_status'] = $request->pr_status;
        $data['note'] = $request->note;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Prospek::insert($data);
        // dd($request->all());

        return redirect()->back()->with('success', 'Prospek Added');
    }

    public function editProspek($prospek_id)
    {
        $prospek = Prospek::find($prospek_id);

        return view('backend.prospek.edit', compact('prospek'));
    }

    public function updateprospek(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'alamat',
            'nohp',
            'rumah',
            'leads_by',
            'pr_status',
            'note',
        ]);

        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['nohp'] = $request->nohp;
        $data['rumah'] = $request->rumah;
        $data['leads_by'] = $request->leads_by;
        $data['pr_status'] = $request->pr_status;
        $data['note'] = $request->note;
        // $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        Prospek::where('id', $request->id)->update($data);
        // dd($request->all());

        return redirect()->back()->with('success', 'Prospek Updated');
    }

    public function destroy($prospek_id)
    {
        Prospek::find($prospek_id)->delete();
        return redirect()->back()->with('warning', 'Prospek deleted');
    }

    public function draft($prospek_id)
    {
        Prospek::findOrFail($prospek_id)->update(['status' => 0]);
        return redirect()->back()->withToastWarning('Berhasil Dimasukan Ke Dalam Draft');
    }

    public function publish($prospek_id)
    {
        Prospek::findOrFail($prospek_id)->update(['status' => 1]);
        return redirect()->back()->withToastInfo('Berhasil Dipublish');
    }
}