@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')

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
                                <td><img src="{{asset($dt->gambar)}}" width="100px;" height="80px;" x;" alt=""></td>
                                <td>{{$dt->lokasi}}</td>
                                <td style="white-space: nowrap;">{{$dt->desc}}</td>
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
                    <div id="AllProducts">

                    </div>
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
                <form id="update_form" name="UpdatePrimary" action="{{route('update.fasility')}}" method="post">
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

                <h6 class="font-weight-semibold">Type : <span id="type"></span></h6>
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

<div id="primaryEditDetailModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-pencil7 mr-2"></i> &nbsp;Edit Facility</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form class="wizard-form pt-3" id="update_detail" action="{{route('primary.update')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="iddet">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" id="titledet"
                                    placeholder="Enter Judul">
                                @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="harga" id="price"
                                    placeholder="Enter Judul">
                                @error('harga')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Type Rumah: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="type" id="tipe"
                                    placeholder="Enter Type Rumah">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Developer: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="dev_id" id="dev">
                                    @foreach($developer as $category)
                                    <option value="{{$category->id}}">{{$category->nama_dev}}</option>
                                    @endforeach
                                </select>
                                @error('dev_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Lokasi: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="lokasi" id="lok"
                                    placeholder="Enter Lokasi">
                                @error('lokasi')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="exampleInputFile">Faslitas</label>
                                <textarea name="fasilitas" id="fas" cols="20" rows="5" class="form-control"></textarea>
                                @error('fasilitas')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="exampleInputFile">Deskripsi</label>
                                <textarea name="description" id="desc" cols="20" rows="5"
                                    class="form-control"></textarea>
                                @error('description')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" id="image" name="image" value="{{old('title')}}"
                                    placeholder="Enter Judul">
                                @error('image')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</div>

<script>
//When click edit primary
function editPrimary(id) {
    $.get('/admin/primary/fasility/' + id, function(primary) {
        $("#id").val(primary.id);
        $("#title").val(primary.title);
        $("#km").val(primary.km);
        $("#kt").val(primary.kt);
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
        $("#type").text(detail.type);
        $("#lokasi").text(detail.lokasi);
        $("#ktidur").text(detail.kt);
        $("#kmandi").text(detail.km);
        $("#primaryDetailModal").modal("toggle");
    });
}

// Update the detail
$('#update_detail').on('submit', function(e) {
    e.preventDefault();
    var form = this;
    $.ajax({
        url: $(form).attr('action'),
        method: $(form).attr('method'),
        data: new FormData(form),
        processData: false,
        dataType: 'json',
        contentType: false,
        beforeSend: function() {
            $(form).find('span.error-text').text('');
        },
        success: function(data) {
            if (data.code == 0) {
                $.each(data.error, function(prefix, val) {
                    $(form).find('span.' + prefix + '_error').text(val[0]);
                });
            } else {
                $("#primaryEditDetailModal").modal("hide");
                $('#update_detail')[0].reset();
                // alert(data.msg);
                fetchAllProducts();
            }
        }
    });
});

// Update the primary
$('#update_form').on('submit', function(e) {
    e.preventDefault();
    var form = this;
    $.ajax({
        url: $(form).attr('action'),
        method: $(form).attr('method'),
        data: new FormData(form),
        processData: false,
        dataType: 'json',
        contentType: false,
        beforeSend: function() {
            $(form).find('span.error-text').text('');
        },
        success: function(data) {
            if (data.code == 0) {
                $.each(data.error, function(prefix, val) {
                    $(form).find('span.' + prefix + '_error').text(val[0]);
                });
            } else {
                $("#primaryEditModal").modal("hide");
                $('#update_form')[0].reset();
                // alert(data.msg);
                fetchAllProducts();
            }
        }
    });
});

//Fetch all products
fetchAllProducts();

function fetchAllProducts() {
    $.get('{{route("get.primary")}}', {}, function(data) {
        $('#AllProducts').html(data.result);
    }, 'json');
}

//When click edit primary
function editDetailPrimary(id) {
    $.get('/admin/primary/editdetail/' + id, function(detail) {
        $("#iddet").val(detail.id);
        $("#titledet").val(detail.title);
        $("#price").val(detail.harga);
        $("#tipe").val(detail.type);
        $("#lok").val(detail.lokasi);
        $("#dev").val(detail.dev_id);
        $("#fas").val(detail.fasilitas);
        $("#desc").val(detail.description);
        $("#primaryEditDetailModal").modal("toggle");
    });
}
</script>


@endsection