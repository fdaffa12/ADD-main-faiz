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
<button type="button" class="btn btn-indigo ml-3" data-toggle="modal" data-target="#modal_input"> <i
        class="icon-plus3 mr-2"></i> New Leads</button>
@endsection
@section('js')
<script src="{{ asset('assets/js/pages/developer_datatable.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Detail Iklan -->
<div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
        Detail Iklan
    </h6>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-xl-8">
        <div class="card blog-horizontal">
            <div class="card-body">
                <div class="card-img-actions mr-sm-3 mb-3 mb-sm-0">
                    <a href="#course_preview" data-toggle="modal">
                        <img src="{{ asset($post->gambar) }}" class="img-fluid card-img" alt="">
                        <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                    </a>
                </div>

                <div class="mb-3">
                    <h5 class="d-flex font-weight-semibold flex-nowrap my-1">
                        <a href="#" class="text-body mr-2">{{$post->nama_iklan}}</a>
                    </h5>

                    <ul class="list-inline list-inline-dotted text-muted mb-0">
                        <li class="list-inline-item" style="text-transform:capitalize">{{$post->sosmed}}</li>
                        <li class="list-inline-item">{{$post->durasi}}</li>
                    </ul>
                </div>

                <p>Developer : {{$post->developer->nama_dev}}</p>

                <p>Project : {{$post->project->title}}</p>

                <p>Budget : @currency($post->budget)</p>

                <!-- Fasilitas:
                </br>Dekat dengan Neraka</br>Penjagaan 24/7 Oleh malaikat</br>Akses menuju <a href="#">[...]</a> -->
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-4">
        <div class="card card-body">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">Rp, 9,156,390</h3>
                    <span class="text-uppercase font-size-xs">Budget</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-coins icon-3x text-indigo"></i>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">Rp, 12,453,-</h3>
                    <span class="text-uppercase font-size-xs">Cost per Leads</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-price-tags2 icon-3x text-indigo"></i>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">Rp, 3,165,153,-</h3>
                    <span class="text-uppercase font-size-xs">Cost per Day</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-price-tags2 icon-3x text-indigo"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Detail Iklan -->

<!-- Leads Iklan -->
<div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
        Leads Iklan
    </h6>
</div>

<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">{{$totalleads}}</h3>
                    <span class="text-uppercase font-size-xs">Leads</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-profile icon-3x text-primary"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">{{$jumlahfu}}</h3>
                    <span class="text-uppercase font-size-xs">Follow Up</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-spinner11 icon-3x text-yellow"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">{{$jumlahmt}}</h3>
                    <span class="text-uppercase font-size-xs">Berminat</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-checkmark3 icon-3x text-success"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card card-body">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">{{$jumlahni}}</h3>
                    <span class="text-uppercase font-size-xs">Tidak Tertarik</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-cross2 icon-3x text-danger"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header header-elements-sm-inline">
        <h6 class="card-title">Leads iklan</h6>
        <div class="header-elements">
            <div>
                <a href="#" class="btn btn-indigo"><i class="icon-statistics mr-2"></i> Report</a>
            </div>
        </div>
    </div>
    <div class="header-elements d-none py-0 mb-3 mb-md-0">
        <button type="button" class="btn btn-outline-dark"><i class="icon-printer mr-2"></i> Print</button>
        <button type="button" class="btn btn-dark ml-3"> <i class="icon-file-presentation mr-2"></i> Generate
            report</button>
    </div>

    <div class="table-responsive">
        <!-- <div id="AllLeads">

        </div> -->

        <table class="table text-nowrap">
            <thead>
                <tr>
                    <th style="width: 50px"> </th>
                    <th style="width: 300px;">User</th>
                    <th>Description</th>
                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active table-border-double">
                    <td colspan="3">Data Leads</td>
                    <td class="text-right">
                        <span class="badge badge-primary badge-pill">{{$totaldl}}</span>
                    </td>
                </tr>

                @foreach ($new as $post)
                <tr id="{{$post->id}}">
                    <td class="text-center">
                        <i class="icon-notification2 text-info"></i>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="btn btn-teal rounded-pill btn-icon btn-sm">
                                    <span class="letter-icon"></span>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('info.detail', $post->id)}}"
                                    class=" text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                                <div class="text-muted font-size-sm"><span
                                        class="badge badge-mark border-info mr-1"></span>
                                    Baru</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body"
                            data-toggle="modal" data-target="#modal_leads">
                            <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                            <span class="text-muted">{{$post->tanggal}}</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i
                                        class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-radio-unchecked text-yellow"></i>
                                        Follow up</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                @foreach($followup as $post)
                <tr>
                    <td class="text-center">
                        <div class="icon-phone2 text-yellow"></div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="btn btn-warning rounded-pill btn-icon btn-sm">
                                    <span class="letter-icon"></span>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                                <div class="text-muted font-size-sm"><span
                                        class="badge badge-mark border-yellow mr-1"></span>
                                    Follow Up</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body"
                            data-toggle="modal" data-target="#modal_leads">
                            <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                            <span class="text-muted">{{$post->tanggal}}</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i
                                        class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('admin/berminat/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-checkmark3 text-success"></i>
                                        Berminat</a>
                                    <a href="{{ url('admin/notint/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-cross2 text-danger"></i>
                                        Tidak Tertarik</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                <tr class="table-active table-border-double">
                    <td colspan="3">Berminat</td>
                    <td class="text-right">
                        <span class="badge badge-success badge-pill">{{$totalbm}}</span>
                    </td>
                </tr>

                @foreach($closing as $post)
                <tr>
                    <td class="text-center">
                        <i class="icon-checkmark3 text-success"></i>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="btn btn-success rounded-pill btn-icon btn-sm">
                                    <span class="letter-icon"></span>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                                <div class="text-muted font-size-sm"><span
                                        class="badge badge-mark border-success mr-1"></span>
                                    Closing</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body"
                            data-toggle="modal" data-target="#modal_leads">
                            <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                            <span class="text-muted">{{$post->tanggal}}</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i
                                        class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <a href="#" class="dropdown-item"><i class="icon-radio-unchecked text-yellow"></i>
                                Follow up</a> -->
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                @foreach($berminat as $post)
                <tr>
                    <td class="text-center">
                        <i class="icon-radio-unchecked text-success"></i>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="btn btn-pink rounded-pill btn-icon btn-sm">
                                    <span class="letter-icon"></span>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                                <div class="text-muted font-size-sm"><span
                                        class="badge badge-mark border-success mr-1"></span>
                                    Berminat</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body"
                            data-toggle="modal" data-target="#modal_leads">
                            <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                            <span class="text-muted">{{ $post->tanggal }}</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i
                                        class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('admin/closing/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-checkmark3 text-success"></i>
                                        Closing</a>
                                    <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-undo"></i>
                                        Follow Up</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                <tr class="table-active table-border-double">
                    <td colspan="3">Tidak Tertarik</td>
                    <td class="text-right">
                        <span class="badge badge-danger badge-pill">{{$totaltb}}</span>
                    </td>
                </tr>

                @foreach($repurpose as $post)
                <tr>
                    <td class="text-center">
                        <i class="icon-spinner11 text-warning"></i>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="btn btn-warning rounded-pill btn-icon btn-sm">
                                    <span class="letter-icon"></span>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                                <div class="text-muted font-size-sm"><span
                                        class="badge badge-mark border-warning mr-1"></span>
                                    Repurpose</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body"
                            data-toggle="modal" data-target="#modal_leads">
                            <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                            <span class="text-muted">{{$post->tanggal}}</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i
                                        class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-undo"></i>
                                        Follow Up</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

                @foreach($notin as $post)
                <tr>
                    <td class="text-center">
                        <i class="icon-cross2 text-danger"></i>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="btn btn-indigo rounded-pill btn-icon btn-sm">
                                    <span class="letter-icon"></span>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('info.detail', $post->id)}}"
                                    class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                                <div class="text-muted font-size-sm"><span
                                        class="badge badge-mark border-danger mr-1"></span>
                                    Tidak Tertarik</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body"
                            data-toggle="modal" data-target="#modal_leads">
                            <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                            <span class="text-muted">{{$post->tanggal}}</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i
                                        class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-undo"></i>
                                        Repurpose</a>
                                    <a href="{{ url('admin/repurpose/'.$post->id) }}" class="dropdown-item"><i
                                            class="icon-spinner11 text-warning"></i>
                                        Repurpose</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /Leads Iklan -->

<!-- Modal Input -->
<div id="modal_input" class="modal fade" data-keyboard="false" data-backdrop="false" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-indigo">
                <h5 class="modal-title">Input Data Leads</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="{{ route('store.leads') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='id' value="{{$id}}">
                <div class="modal-body">
                    &nbsp;
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="form-group">
                                <label>Tanggal Masuk:</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Customer:</label>
                                <input type="text" name="nama_cus" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Leads From:</label>
                                <select name="leads_by" class="form-control" value="{{old('leads_by')}}">
                                    <option value="FB Inbox" selected>FB Inbox</option>
                                    <option value="FB Comment">FB Comment</option>
                                    <option value="IG Inbox">IG Inbox</option>
                                    <option value="IG Comment">IG Comment</option>
                                    <option value="WhatsApp">WhatsApp</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kota Asal:</label>
                                <input type="text" name="kota" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No HP:</label>
                                <input type="text" name="nohp" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Keterangan:</label>
                                <input type="text" name="keterangan" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Minat:</label>
                                <input type="text" name="minat" class="form-control">
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
<!-- /Modal Input -->

<!-- Modal Leads -->
<div id="modal_leads" class="modal fade" data-keyboard="false" data-backdrop="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">[#3489] Leads Baru</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <!-- Consumer Data -->
                <h6 class="font-weight-semibold">Data Konsumen</h6>
                <table class="table table-borderless table-xs my-2">
                    <tbody>
                        <tr>
                            <td><i class="icon-calendar2 mr-2"></i> Created:</td>
                            <td class="text-right text-muted"><span id="tanggal"></span></td>
                            </a>
                        </tr>
                        <tr>
                            <td><i class="icon-user mr-2"></i> Nama:</td>
                            <td class="text-right"><span id="nama_cus"></span></td>
                        </tr>
                        <tr>
                            <td><i class="icon-location3 mr-2"></i> Alamat:</td>
                            <td class="text-right"><span id="kota"></span></td>
                        </tr>
                        <tr>
                            <td><i class="icon-phone2 mr-2"></i> No. HP:</td>
                            <td class="text-right"><span id="nohp"></span></td>
                        </tr>
                    </tbody>
                </table>
                <!-- /Consumer Data -->

            </div>
        </div>
    </div>
</div>
<!-- /Modal Leads -->

<script>
$(function() {

    // $("#form").validate({
    //     rules: {
    //         nama_iklan: "required",
    //         durasi: "required",
    //         sosmed: "required",
    //         budget: "required",
    //         developer_id: "required",
    //         project_id: "required",

    //     },
    //     messages: {},

    //     submitHandler: function(form) {
    //         var form_action = $("#form").attr("action");
    //         $.ajax({
    //             data: $('#form').serialize(),
    //             url: form_action,
    //             type: "POST",
    //             dataType: 'json',
    //             success: function(data) {
    //                 var post;
    //                 post +=
    //                     '<td class="text-center"><i class="icon-notification2 text-info"></i></td>';
    //                 post +=
    //                     '<td><div class="d-flex align-items-center"><div class="mr-3"><a href="#" class="btn btn-teal rounded-pill btn-icon btn-sm"><span class="letter-icon"></span></a></div><div><a href="#" class="text-body font-weight-semibold letter-icon-title">' +
    //                     data.nama_cus +
    //                     '</a><div class="text-muted font-size-sm"><span class="badge badge-mark border-info mr-1"></span> Baru</div></div></div></td>';
    //                 $('#primaryTable tbody #' + data.id).html(post);
    //                 $('#form')[0].reset();
    //                 $('#modal_input').modal('hide');
    //             },
    //             error: function(data) {}
    //         });
    //     }
    // });


    // $('#form').on('submit', function(e) {
    //     e.preventDefault();
    //     var form = this;
    //     $.ajax({
    //         url: $(form).attr('action'),
    //         method: $(form).attr('method'),
    //         data: new FormData(form),
    //         processData: false,
    //         dataType: 'json',
    //         contentType: false,
    //         beforeSend: function() {
    //             $(form).find('span.error-text').text('');
    //         },
    //         success: function(data) {
    //             if (data.code == 0) {
    //                 $.each(data.error, function(prefix, val) {
    //                     $(form).find('span.' + prefix + '_error').text(val[0]);
    //                 });
    //             } else {
    //                 var post =
    //                     '<td class="text-center"><i class="icon-notification2 text-info"></i></td>';
    //                 post +=
    //                     '<td><div class="d-flex align-items-center"><div class="mr-3"><a href="#" class="btn btn-teal rounded-pill btn-icon btn-sm"><span class="letter-icon"></span></a></div><div><a href="#" class="text-body font-weight-semibold letter-icon-title">' +
    //                     data.nama_cus +
    //                     '</a><div class="text-muted font-size-sm"><span class="badge badge-mark border-info mr-1"></span> Baru</div></div></div></td>';
    //                 post += '<td><h6 class="font-weight-semibold mb-0">Rp. ' + data
    //                     .harga +
    //                     '</h6></td>';
    //                 $('#primaryTable tbody #' + data.id).html(post);
    //                 $('#form')[0].reset();
    //                 $('#modal_input').modal('hide');
    //                 // $("#modal_input").modal("hide");
    //                 // $('#form')[0].reset();
    //                 // // alert(data.msg);
    //                 // fetchAllLeads();
    //             }
    //         }
    //     });
    // });

    //Fetch all products
    fetchAllLeads();

    function fetchAllLeads() {
        $.get('{{route("get.leads")}}', {}, function(data) {
            $('#AllLeads').html(data.result);
        }, 'json');
    }

})

function showDetail(id) {
    $.get('/admin/leads/detail/' + id, function(detail) {
        $("#id_leads").val(detail.id);
        $("#nama_cus").text(detail.nama_cus);
        $("#tanggal").text(detail.tanggal);
        $("#kota").text(detail.kota);
        $("#nohp").text(detail.nohp);
        $("#type").text(detail.type);
        $("#modal_leads").modal("toggle");
    });
}
</script>
@endsection