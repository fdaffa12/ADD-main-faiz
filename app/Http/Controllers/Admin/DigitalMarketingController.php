<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Campaign;
use App\Developer;
use App\Lead;
use App\Message;
use App\Primary;
use Response;

class DigitalMarketingController extends Controller
{
    public function index()
    {
        $developer = Developer::orderBy('nama_dev', 'asc')->get();
        $product = Primary::orderBy('title', 'asc')->get();
        $jumlah = Campaign::sum('budget');

        return view('backend.digital.digicampaign', compact('developer', 'product', 'jumlah'));
    }

    public function digidet($id)
    {

        $jumlahnew = Lead::where('campaign_id', $id)->where('status', 1)->count();
        $jumlahfu = Lead::where('campaign_id', $id)->where('status', 2)->count();
        $totaldl = $jumlahnew + $jumlahfu;

        //utk tampilan berminat
        $jumlahco = Lead::where('campaign_id', $id)->where('status', 3)->count();
        $jumlahmt = Lead::where('campaign_id', $id)->where('status', 4)->count();
        $totalbm = $jumlahco + $jumlahmt;

        //utk tampilan tdk berminat
        $jumlahrp = Lead::where('campaign_id', $id)->where('status', 5)->count();
        $jumlahni = Lead::where('campaign_id', $id)->where('status', 0)->count();
        $totaltb = $jumlahrp + $jumlahni;

        $new = Lead::where('campaign_id', $id)->where('status', 1)->orderby('id', 'desc')->get();
        $followup = Lead::where('campaign_id', $id)->where('status', 2)->orderby('id', 'desc')->get();
        $closing = Lead::where('campaign_id', $id)->where('status', 3)->orderby('id', 'desc')->get();
        $berminat = Lead::where('campaign_id', $id)->where('status', 4)->orderby('id', 'desc')->get();
        $repurpose = Lead::where('campaign_id', $id)->where('status', 5)->orderby('id', 'desc')->get();
        $notin = Lead::where('campaign_id', $id)->where('status', 0)->orderby('id', 'desc')->get();

        $totalleads = Lead::where('campaign_id', $id)->count();
        $jumlahfu = Lead::where('campaign_id', $id)->where('status', 2)->count();
        $jumlahmt = Lead::where('campaign_id', $id)->where('status', 4)->count();
        $jumlahni = Lead::where('campaign_id', $id)->where('status', 0)->count();
        $post = Campaign::find($id);
        return view('backend.digital.digidet', compact(
            'totalleads',
            'jumlahfu',
            'jumlahmt',
            'jumlahni',
            'post',
            'totaldl',
            'totalbm',
            'totaltb',
            'new',
            'followup',
            'closing',
            'berminat',
            'repurpose',
            'notin',
        ))->with([
            'id' => $id
        ]);
    }

    public function spreadsheet()
    {
        return view('backend.digital.spreadsheet');
    }

    public function storeCampaign(Request $request)
    {
        $request->validate([
            'nama_iklan' => 'required|max:255',
            'durasi' => 'required',
            'sosmed' => 'required',
            'budget' => 'required',
            'developer_id' => 'required',
            'project_id' => 'required',
        ], [
            'developer_id.required' => 'Select  Developer',
            'project_id.required' => 'Select Project',
        ]);



        $post = new Campaign();
        $post['nama_iklan'] = $request->nama_iklan;
        $post['durasi'] = $request->durasi;
        $post['sosmed'] = $request->sosmed;
        $post['budget'] = $request->budget;
        $post['developer_id'] = $request->developer_id;
        $post['project_id'] = $request->project_id;
        $post['created_at'] = date('Y-m-d H:i:s');
        $post['updated_at'] = date('Y-m-d H:i:s');

        //cek poto
        $file = $request->file('gambar');
        if ($file) {
            $file->move('uploads', $file->getClientOriginalName());
            $post['gambar'] = 'uploads/' . $file->getClientOriginalName();
        }

        $post->save();

        return Response::json($post);
    }

    public function fetchCampaign()
    {
        $campaign = Campaign::where('status', 1)->get();
        $completed = Campaign::where('status', 0)->get();
        $data = view('backend.digital.fetchcampaign', ['campaign' => $campaign, 'completed' => $completed])->render();
        return response()->json(['code' => 1, 'result' => $data]);
    }

    public function storeLeads(Request $request)
    {
        $request->validate([
            'nama_cus' => 'required|max:255',
            'kota' => 'required',
            'tanggal' => 'required',
            'nohp' => 'required',
        ]);

        $campaign_id = $request->id;

        $post = new Lead();
        $post['nama_cus'] = $request->nama_cus;
        $post['kota'] = $request->kota;
        $post['tanggal'] = $request->tanggal;
        $post['minat'] = $request->minat;
        $post['keterangan'] = $request->keterangan;
        $post['nohp'] = $request->nohp;
        $post['campaign_id'] = $campaign_id;
        $post['created_at'] = date('Y-m-d H:i:s');
        $post['updated_at'] = date('Y-m-d H:i:s');

        $post->save();

        return redirect()->back()->with('success', 'Successfully Updated');
    }

    public function fetchLeads()
    {
        //utk tampilan data leads
        $jumlahnew = Lead::where('status', 1)->count();
        $jumlahfu = Lead::where('status', 2)->count();
        $totaldl = $jumlahnew + $jumlahfu;

        //utk tampilan berminat
        $jumlahco = Lead::where('status', 3)->count();
        $jumlahmt = Lead::where('status', 4)->count();
        $totalbm = $jumlahco + $jumlahmt;

        //utk tampilan tdk berminat
        $jumlahrp = Lead::where('status', 5)->count();
        $jumlahni = Lead::where('status', 0)->count();
        $totaltb = $jumlahrp + $jumlahni;

        $new = Lead::where('status', 1)->orderby('id', 'desc')->get();
        $followup = Lead::where('status', 2)->orderby('id', 'desc')->get();
        $closing = Lead::where('status', 3)->orderby('id', 'desc')->get();
        $berminat = Lead::where('status', 4)->orderby('id', 'desc')->get();
        $repurpose = Lead::where('status', 5)->orderby('id', 'desc')->get();
        $notin = Lead::where('status', 0)->orderby('id', 'desc')->get();
        $data = view('backend.digital.fetchleads', [
            'new' => $new,
            'followup' => $followup,
            'closing' => $closing,
            'berminat' => $berminat,
            'repurpose' => $repurpose,
            'notin' => $notin,
            'totaldl' => $totaldl,
            'totalbm' => $totalbm,
            'totaltb' => $totaltb,
        ])->render();
        return response()->json(['code' => 1, 'result' => $data]);
    }

    public function detailLeads($id)
    {
        //
        $detail = Lead::find($id);
        return response()->json($detail);
    }

    public function infoLeads($id)
    {
        //
        $detail = Lead::find($id);
        $message = Message::where('leads_id', $id)->selectRaw('id, pesan, updated_at, DATE(created_at) as created_date')
            ->orderBy('created_date', 'desc')
            ->get()
            ->groupBy('created_date');
        return view('backend.digital.infoleads', compact('detail', 'message'));
    }

    public function followup($leads_id)
    {
        Lead::findOrFail($leads_id)->update(['status' => 2]);
        return redirect()->back();
    }

    public function closing($leads_id)
    {
        Lead::findOrFail($leads_id)->update(['status' => 3]);
        return redirect()->back();
    }

    public function berminat($leads_id)
    {
        Lead::findOrFail($leads_id)->update(['status' => 4]);
        return redirect()->back();
    }

    public function repurpose($leads_id)
    {
        Lead::findOrFail($leads_id)->update(['status' => 5]);
        return redirect()->back();
    }

    public function notint($leads_id)
    {
        Lead::findOrFail($leads_id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pesan' => 'required',
        ]);

        $leads_id = $request->id;

        $post = new Message();
        $post['judul'] = $request->judul;
        $post['pesan'] = $request->pesan;
        $post['leads_id'] = $leads_id;
        $post['created_at'] = date('Y-m-d H:i:s');
        $post['updated_at'] = date('Y-m-d H:i:s');

        $post->save();

        return redirect()->back()->with('success', 'Successfully Updated');
    }
}