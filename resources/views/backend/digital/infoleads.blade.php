@extends('backend/dashboard')
@section('title','Digital')
@section('headtitle','Digital Marketing')
@section('navbar')
<li class="nav-item">
    <a href="{{url ('dashboard/primary/developer')}}" class="navbar-nav-link">
        <i class="icon-home2 mr-2"></i>
        Primary
    </a>
</li>

<li class="nav-item">
    <a href="{{url ('dashboard/secondary')}}" class="navbar-nav-link">
        <i class="icon-city mr-2"></i>
        Secondary
    </a>
</li>
<li class="nav-item">
    <a href="{{url ('dashboard/digital')}}" class="navbar-nav-link active">
        <i class="icon-display mr-2"></i>
        Digital Marketing
    </a>
</li>
@endsection
@section('headbutton')
@if (Auth::user()->email == 'admin@admin.com')
<a href="javascript:void(0)" onclick="editDetailLeads({{$detail->id}})"><button type="button"
        class="btn btn-indigo ml-3" data-toggle="modal" data-target="#modal_facility"> <i class="icon-pencil7 mr-2"></i>
        Edit Data</button></a>
@elseif (Auth::user()->email == 'tele@marketing.com')
@endif
@endsection
@section('dashcontent')

<div class="card">
    <div class="card-header">
        <h5 class="modal-title">[#{{$detail->id}}] {{$detail->minat}}</h5>
    </div>

    <div class="card-body">

        <div class="row">
            <!-- Consumer Data -->
            <div class="col-12 col-md-6 pt-2">
                <h6 class="font-weight-semibold">Data Konsumen</h6>
                <div class="card-body pt-0">
                    <table class="table table-borderless table-xs my-2">
                        <tbody>
                            <tr>
                                <td class="px-0"><i class="icon-calendar2 mr-2"></i> Created:</td>
                                <td class="px-0 text-right text-muted">{{$detail->tanggal}}</td>
                            </tr>
                            <tr>
                                <td class="px-0"><i class="icon-circles2 mr-2"></i> Status:</td>
                                <td class="px-0 text-right">
                                    <div class="btn-group">
                                        @if ( $detail->status == 0 )
                                        <a href="#" class="badge badge-danger dropdown-toggle"
                                            data-toggle="dropdown">Tidak Tertarik</a>
                                        @elseif ( $detail->status == 1 )
                                        <a href="#" class="badge badge-primary dropdown-toggle"
                                            data-toggle="dropdown">Baru</a>
                                        @elseif ( $detail->status == 2 )
                                        <a href="#" class="badge badge-yellow text-white dropdown-toggle"
                                            data-toggle="dropdown">Follow Up</a>
                                        @elseif ( $detail->status == 3 )
                                        <a href="#" class="badge badge-success dropdown-toggle"
                                            data-toggle="dropdown">Closing</a>
                                        @elseif ( $detail->status == 4 )
                                        <a href="#" class="badge badge-success dropdown-toggle"
                                            data-toggle="dropdown">Berminat</a>
                                        @elseif ( $detail->status == 5 )
                                        <a href="#" class="badge badge-warning dropdown-toggle"
                                            data-toggle="dropdown">Repurpose</a>
                                        @endif
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ url('admin/followup/'.$detail->id) }}"
                                                class="dropdown-item"><span
                                                    class="badge badge-mark mr-2 bg-yellow border-yellow"></span> Follow
                                                up</a>
                                            <a href="{{ url('admin/berminat/'.$detail->id) }}"
                                                class="dropdown-item"><span
                                                    class="badge badge-mark mr-2 bg-success border-success"></span>
                                                Berminat</a>
                                            <a href="{{ url('admin/notint/'.$detail->id) }}" class="dropdown-item"><span
                                                    class="badge badge-mark mr-2 bg-danger border-danger"></span> Tidak
                                                Tertarik</a>
                                            <a href="{{ url('admin/repurpose/'.$detail->id) }}"
                                                class="dropdown-item"><span
                                                    class="badge badge-mark mr-2 bg-warning border-warning"></span>
                                                Repurpose</a>
                                            <a href="{{ url('admin/closing/'.$detail->id) }}"
                                                class="dropdown-item"><span
                                                    class="badge badge-mark mr-2 bg-primary border-primary"></span>
                                                Closing</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0"><i class="icon-mobile mr-2"></i> Leads From:</td>
                                <td class="px-0 text-right">{{$detail->leads_by}}</td>
                            </tr>
                            <tr>
                                <td class="px-0"><i class="icon-user mr-2"></i> Nama:</td>
                                <td class="px-0 text-right">{{$detail->nama_cus}}</td>
                            </tr>
                            <tr>
                                <td class="px-0"><i class="icon-location3 mr-2"></i> Alamat:</td>
                                <td class="px-0 text-right">{{$detail->kota}}</td>
                            </tr>
                            <tr>
                                <td class="px-0"><i class="icon-phone2 mr-2"></i> No. HP:</td>
                                <td class="px-0 text-right">{{$detail->nohp}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Consumer Data -->

            <!-- Uploaded Files -->
            <div class="col-12 col-md-6 pt-2">
                <div class="media-title d-flex">
                    <h6 class="font-weight-semibold">Uploaded files</h6>
                    <span class="ml-auto mr-3">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i
                                        class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModal"><i
                                            class="icon-upload"></i> Upload</a>
                                    <a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="card-body pt-1">
                    <ul class="media-list">
                        @foreach ($jpg as $file)
                        <li class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-file-picture icon-2x text-indigo top-0"></i>
                            </div>

                            <div class="media-body">
                                <a href="#" class="font-weight-semibold text-white">{{$file->file}}</a>
                                <!-- <div class="text-muted font-size-sm">Size: 1.2Mb</div> -->
                            </div>

                            <div class="ml-3">
                                <div class="list-icons">
                                    <a href="{{asset($file->file)}}" download="" class="list-icons-item"><i
                                            class="icon-download"></i></a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                        @foreach ($jpeg as $file)
                        <li class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-file-picture icon-2x text-indigo top-0"></i>
                            </div>

                            <div class="media-body">
                                <a href="#" class="font-weight-semibold text-white">{{$file->file}}</a>
                                <!-- <div class="text-muted font-size-sm">Size: 1.2Mb</div> -->
                            </div>

                            <div class="ml-3">
                                <div class="list-icons">
                                    <a href="{{asset($file->file)}}" download="" class="list-icons-item"><i
                                            class="icon-download"></i></a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                        @foreach ($png as $file)
                        <li class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-file-picture icon-2x text-indigo top-0"></i>
                            </div>

                            <div class="media-body">
                                <a href="#" class="font-weight-semibold text-white">{{$file->file}}</a>
                                <!-- <div class="text-muted font-size-sm">Size: 1.2Mb</div> -->
                            </div>

                            <div class="ml-3">
                                <div class="list-icons">
                                    <a href="{{asset($file->file)}}" download="" class="list-icons-item"><i
                                            class="icon-download"></i></a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                        @foreach ($pdf as $file)
                        <li class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-file-pdf icon-2x text-warning top-0"></i>
                            </div>

                            <div class="media-body">
                                <a href="#" class="font-weight-semibold text-white">{{$file->file}}</a>
                                <!-- <div class="text-muted font-size-sm">Size: 1.2Mb</div> -->
                            </div>

                            <div class="ml-3">
                                <div class="list-icons">
                                    <a href="{{asset($file->file)}}" download="" class="list-icons-item"><i
                                            class="icon-download"></i></a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <!-- /Uploaded Files -->
        </div>
    </div>
</div>
<!-- Messages -->
<div class="card">
    <div class="card-body">
        <h6 class="font-weight-semibold">Messages</h6>
        <div class="media-chat-scrollable mb-3">
            <ul class="media-list">
                @foreach ($message as $date => $posts)
                <li class="media content-divider justify-content-center text-muted mx-0">
                    <span class="px-2">{!! date('d/m/Y', strtotime($date)) !!}</span>
                </li>
                @foreach ($posts as $post)
                <li class="media">
                    <div class="mr-3"><img src="{{asset('assets/images/placeholders/placeholder.jpg')}}"
                            class="rounded-circle" width="40" height="40" alt=""></div>
                    <div class="media-body">
                        <ul class="media-title list-inline list-inline-dotted">
                            <li class="list-inline-item"><a href="#" class="font-weight-semibold">Telemarketing</a></li>
                            <li class="list-inline-item"><span class="font-size-sm text-muted">{!! date('H:i:s',
                                    strtotime($post->updated_at)) !!}</span></li>
                        </ul>
                        <!-- {!! $post->pesan !!} -->
                        {!! nl2br(e($post->pesan)) !!}
                    </div>
                </li>
                @endforeach
                @endforeach
            </ul>
        </div>

        <form action="{{route('store.message')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" value="{{$id}}" name="id">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="minat" placeholder="Title..." class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <!-- <textarea name="pesan" class="form-control mb-3" id="summernote" rows="3" cols="1"
                            placeholder="Enter your message..."></textarea> -->
                        <textarea name="pesan" class="form-control" rows="3" cols="1"
                            placeholder="Enter your message..."></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-indigo btn-labeled btn-labeled-right ml-auto"><b><i
                            class="icon-paperplane"></i></b> Send message</button>
            </div>
        </form>
    </div>
</div>

<!-- Facility modal -->
<div id="leadsEditModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-pencil7 mr-2"></i> &nbsp;Edit Facility</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{route('update.leads')}}" method="post">
                    <input type="hidden" name="id" id="id" />
                    @csrf
                    <div class="modal-body">
                        &nbsp;
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="form-group">
                                    <label>Nama:</label>
                                    <input type="text" name="nama_cus" id="nama_cus" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Kota Asal:</label>
                                    <input type="text" name="kota" id="kota" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>No HP:</label>
                                    <input type="text" name="nohp" id="nohp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Leads BY:</label>
                                    <select class="form-control" name="leads_by" id="leads_by"
                                        data-placeholder="Choose Category">
                                        <option value="WhatsApp" selected>WhatsApp</option>
                                        <option value="FB Inbox">FB Inbox</option>
                                        <option value="FB Comment">FB Comment</option>
                                        <option value="Form FB">Form FB</option>
                                        <option value="IG Inbox">IG Inbox</option>
                                        <option value="IG Comment">IG Comment</option>
                                        <option value="Form Google">Form Google</option>
                                        <option value="Website">Website</option>
                                        <option value="Google Bisnis">Google Bisnis</option>
                                        <option value="Kanvas">Kanvas</option>
                                        <option value="Walk-In">Walk-In</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        &nbsp;
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link text-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-indigo">Submit form</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Facility modal -->

<!-- add file -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('store.file')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="form-group">
                                    <label>File:</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link text-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-indigo">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- add file -->

<script>
//When click edit primary
function editDetailLeads(id) {
    $.get('/admin/leads/edit/' + id, function(leads) {
        $("#id").val(leads.id);
        $("#nama_cus").val(leads.nama_cus);
        $("#kota").val(leads.kota);
        $("#nohp").val(leads.nohp);
        $("#leads_by").val(leads.leads_by);
        $("#leadsEditModal").modal("toggle");
    });
}
$(document).ready(function() {
    $('#summernote').summernote();
});
</script>
@endsection