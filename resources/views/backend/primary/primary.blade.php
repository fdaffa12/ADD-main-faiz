@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<div class="page-header">
    <div class="page-header-content container header-elements-md-inline">
        <div class="d-flex">
            <div class="page-title">
                <h4 class="font-weight-semibold">Dashboard</h4>
                <div class="text-muted">Welcome back, Fadlil!</div>
            </div>
            <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none py-0 mb-3 mb-md-0">
            <button type="button" class="btn btn-primary ml-3"> <i class="icon-plus3 mr-2"></i>
                Developer</button>
            <button type="button" class="btn btn-primary ml-3"> <i class="icon-plus3 mr-2"></i>
                Product</button>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Table -->
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-solid rounded">
            <li class="nav-item"><a href="#solid-rounded-tab1" class="nav-link rounded-left active"
                    data-toggle="tab">Developer List</a></li>
            <li class="nav-item"><a href="#solid-rounded-tab2" class="nav-link" data-toggle="tab">Product
                    List</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="solid-rounded-tab1">
                <div class="table-responsive">
                    <table class="table datatable-button-init-basic">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="width: 150px">Developer Name</th>
                                <th style="width: 150px;">Image</th>
                                <th>Lokasi</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 20px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($developer as $dt)
                            <tr>
                                <td></td>
                                <td><span class="text-default font-weight-semibold">{{ $dt->nama_dev }}</span>
                                </td>
                                <td><img src="{{asset($dt->gambar)}}" width="100px;" height="80px;"
                                        style="border-radius:10px;" alt=""></td>
                                <td style="white-space: nowrap;">{{$dt->lokasi}}</td>
                                <td style="white-space: nowrap;">{!! substr($dt->desc,0,100) !!}</td>
                                <td>
                                    @if( $dt->status == 0 )
                                    <label class="label label-info">Subsidi</label>
                                    @else
                                    <label class="label label-info">Komersil</label>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                                data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- <a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage
                                            Media</a> -->
                                                <a href="{{url('admin/edit-dev/'.$dt->id)}}" class="dropdown-item"><i
                                                        class="icon-file-text2"></i>
                                                    Edit
                                                    Detail</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="{{url('admin/delete-dev/'.$dt->id)}}" class="dropdown-item"><i
                                                        class="icon-file-minus"></i>
                                                    Delete
                                                    Developer</a>
                                                @if( $dt->status == 0 )
                                                <a href="{{ url('admin/publish-dev/'.$dt->id) }}"
                                                    class="dropdown-item"><i class="icon-eye"></i>Komersil</a>
                                                @else
                                                <a href="{{ url('admin/draft-dev/'.$dt->id) }}" class="dropdown-item"><i
                                                        class="icon-eye-blocked"></i>
                                                    Subsidi</a>
                                                @endif
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

            <div class="tab-pane fade" id="solid-rounded-tab2">
                <div class="table-responsive">
                    <table class="table datatable-button-init-basic">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Description</th>
                                <th>LB / LT</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($developer as $dt)
                            <tr class="table-active table-border-double">
                                <td colspan="7">{{$dt->nama_dev}}</td>
                            </tr>
                            @foreach ($primaries as $prim)
                            @if($dt->id == $prim->dev_id)
                            <tr id="{{$prim->id}}">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <a href="#" class="text-default font-weight-semibold"
                                                style="white-space: nowrap;">{{$prim->title}}</a>
                                            <div class="font-size-sm">
                                                <span class="badge badge-mark border-slate-400 mr-1"></span>
                                                <a href="javascript:void(0)" onclick="showDetail({{$prim->id}})"
                                                    data-toggle="modal" data-target="#modal_facility"
                                                    class="text-muted">Show Detail</a>
                                                <!-- <a href="javascript:void(0)" onclick="editPrimary({{$prim->id}})"
                                                    data-toggle="modal" data-target="#modal_facility"
                                                    class="text-muted">Show Facility</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-6 text-wrap">{{$prim->description}}</td>
                                <td><span class="text-muted">{{$prim->lb}} / {{$prim->lt}}</span></td>
                                <td>
                                    <h6 class="font-weight-semibold mb-0">Rp. {{$prim->harga}}</h6>
                                </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                                data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" onclick="editPrimary({{$prim->id}})"
                                                    data-toggle="modal" data-target="#modal_facility"
                                                    class="dropdown-item"><i class="icon-file-text2"></i>
                                                    Edit Fasility</a>
                                                <a href="#" class="dropdown-item"><i class="icon-file-picture"></i>
                                                    Manage Media</a>
                                                <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                                    Product</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Delete
                                                    Product</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Table -->

<!-- Facility modal -->
<div id="primaryEditModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-pencil7 mr-2"></i> &nbsp;Edit Facility</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form id="updatePrimary" name="UpdatePrimary" action="{{route('update.fasility')}}" method="post">
                    <input type="hidden" name="id" id="id" />
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <span class="badge badge-primary badge-icon"><i
                                                class="icon-bed2 icon-2x"></i></span>
                                    </div>

                                    <div class="align-middle">
                                        <h3>Kamar Tidur</h3>
                                    </div>

                                    <div class="col-md-5 ml-md-auto">
                                        <input type="text" id="kt" name="kt" class="form-control touchspin-set-value">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-body">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <span class="badge badge-primary badge-icon"><i
                                                class="icon-man-woman icon-2x"></i></span>
                                    </div>

                                    <div class="align-middle">
                                        <h3>Kamar Mandi</h3>
                                    </div>

                                    <div class="col-md-5 ml-md-auto">
                                        <input type="text" id="km" name="km" class="form-control touchspin-set-value">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <span class="badge badge-primary badge-icon"><i
                                                class="icon-checkbox-partial icon-2x"></i></span>
                                    </div>

                                    <div class="align-middle">
                                        <h3>Luas Bangunan</h3>
                                    </div>

                                    <div class="col-md-5 ml-md-auto">
                                        <input type="text" id="lb" name="lb" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-body">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <span class="badge badge-primary badge-icon"><i
                                                class="icon-square icon-2x"></i></span>
                                    </div>

                                    <div class="align-middle">
                                        <h3>Luas Tanah</h3>
                                    </div>

                                    <div class="col-md-5 ml-md-auto">
                                        <input type="text" id="lt" name="lt" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-link" data-dismiss="modal"><i
                                class="icon-cross2 font-size-base mr-1"></i>
                            Close</button>
                        <button type="submit" class="btn btn-success">
                            Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Facility modal -->

<!-- detail modal -->
<div id="primaryDetailModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> <span id="title"></span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <img src="" alt="">

            <div class="modal-body">
                <h6 class="font-weight-semibold">Deskripsi</h6>
                <p><span id="description"></span></p>

                <hr>

                <h6 class="font-weight-semibold">Fasilitas</h6>
                <p id="fasilitas"></p>

                <hr>

                <h6 class="font-weight-semibold">Kamar Tidur : <span id="ktidur"></span></h6>
                <h6 class="font-weight-semibold">Kamar Mandi : <span id="kmandi"></span></h6>
                <h6 class="font-weight-semibold">Lokasi : <span id="lokasi"></span></h6>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end detail modal -->

</div>
<script>
//When click edit primary
function editPrimary(id) {
    $.get('/admin/primary/fasility/' + id, function(primary) {
        $("#id").val(primary.id);
        $("#kt").val(primary.kt);
        $("#km").val(primary.km);
        $("#lb").val(primary.lb);
        $("#lt").val(primary.lt);
        $("#primaryEditModal").modal("toggle");
    });
}

//When click detail
function showDetail(id) {
    $.get('/admin/primary/detail/' + id, function(detail) {
        $("#id").text(detail.id);
        $("#title").text(detail.title);
        $("#description").text(detail.description);
        $("#fasilitas").text(detail.fasilitas);
        $("#harga").text(detail.harga);
        $("#lokasi").text(detail.lokasi);
        $("#ktidur").text(detail.kt);
        $("#kmandi").text(detail.km);
        $("#primaryDetailModal").modal("toggle");
    });
}

// Update the primary
$("#updatePrimary").validate({
    rules: {
        kt: "required",
        km: "required",
        lt: "required",
        lb: "required",

    },
    messages: {},

    submitHandler: function(form) {
        var form_action = $("#updatePrimary").attr("action");
        $.ajax({
            data: $('#updatePrimary').serialize(),
            url: form_action,
            type: "POST",
            dataType: 'json',
            success: function(data) {
                var primary;
                primary +=
                    '<td><div class="d-flex align-items-center"><div><a href="#" class="text-default font-weight-semibold"style="white-space: nowrap;">' +
                    data.title +
                    '</a><div class="font-size-sm"><span class="badge badge-mark border-slate-400 mr-1"></span><a href="javascript:void(0)" onclick="editPrimary(' +
                    data.id +
                    ')"data-toggle="modal" data-target="#modal_facility"class="text-muted">Show Facility</a></div></div></div></td>';
                primary += '<td style="white-space: nowrap;">' + data.description + '</td>'
                primary += '<td><span class="text-muted">' + data.lb + ' / ' + data.lt +
                    '</span></td>';
                primary += '<td><h6 class="font-weight-semibold mb-0">Rp. ' + data.harga +
                    '</h6></td>';
                // primary += '<td style="white-space: nowrap;">' + data.kt + ' Kamar Tidur</td>';
                // primary += '<td style="white-space: nowrap;">' + data.km + ' Kamar Mandi</td>';
                primary +=
                    '<td class="text-center"> <div class="list-icons" ><div class="dropdown" ><a href="#" class="list-icons-item dropdown-toggle caret-0"data-toggle="dropdown"><i class="icon-menu7"></i></a><div class="dropdown-menu dropdown-menu-right"><a href="#" class = "dropdown-item" > <i class="icon-file-picture"> </i> Manage Media </a><a href="#" class="dropdown-item"> <i class = "icon-file-text2"> </i> Edit Product </a> <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Delete Product</a></div></div></div></td>';
                $('#primaryTable tbody #' + data.id).html(primary);
                $('#updatePrimary')[0].reset();
                $('#primaryEditModal').modal('hide');
            },
            error: function(data) {}
        });
    }
});
</script>
@endsection