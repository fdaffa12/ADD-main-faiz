@extends('backend/dashboard')
@section('title','Marketing Campaign')
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
<button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#addModal"> <i
        class="icon-plus3 mr-2"></i> New Campaign</button>
@elseif (Auth::user()->email == 'tele@marketing.com')
@endif
@endsection
@section('js')
<script src="{{ asset('assets/js/pages/developer_datatable.js') }}"></script>
@endsection
@section('dashcontent')
<div class="card">
    <div class="card-header header-elements-sm-inline">
        <h6 class="card-title">Marketing campaigns</h6>
        <div class="header-elements">
            <span class="badge badge-success badge-pill">{{$activecampaign}} active</span>
            <div class="list-icons ml-3">
                <div class="dropdown">
                    <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-menu7"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body d-lg-flex align-items-lg-center justify-content-lg-between flex-lg-wrap">
        <div class="d-flex align-items-center mb-3 mb-lg-0">
            <a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon">
                <i class="icon-coins"></i>
            </a>
            <div class="ml-3">
                <h5 class="font-weight-semibold mb-0">@currency($jumlah)</h5>
                <span class="text-muted">Budget</span>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3 mb-lg-0">
            <a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon">
                <i class="icon-profile"></i>
            </a>
            <div class="ml-3">
                <h5 class="font-weight-semibold mb-0">{{$jumlahleads}}</h5>
                <span class="text-muted">Leads</span>
            </div>
        </div>

        <div>
            <a href="{{url('admin/digital/spreadsheet')}}" class="btn btn-indigo"><i class="icon-statistics mr-2"></i>
                View report</a>
        </div>
    </div>

    <div class="table-responsive">
        <div id="AllCampaign">

        </div>
        <!-- <script src="https://sheetdb.io/s/t/8y13p1icwy5vc.js"></script> -->

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Campaign</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action="{{ route('store.campaign') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Judul Iklan: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="nama_iklan" name="nama_iklan"
                                    value="{{old('nama_iklan')}}" placeholder="Enter Judul">
                                @error('nama_iklan')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Mulai: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="date" id="durasi" name="durasi"
                                    value="{{old('durasi')}}" placeholder="Enter Tanggal Mulai">
                                @error('durasi')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Berakhir: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="date" id="akhir_durasi" name="akhir_durasi"
                                    value="{{old('akhir_durasi')}}" placeholder="Enter Tanggal Berakhir ">
                                @error('akhir_durasi')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Developer: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="developer_id" id="developer_id"
                                    data-placeholder="Choose Developer">
                                    <option label="Choose Developer"></option>
                                    @foreach($developer as $dev)
                                    <option value="{{$dev->id}}">{{$dev->nama_dev}}</option>
                                    @endforeach
                                </select>
                                @error('developer_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Product: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="project_id" id="project_id"
                                    data-placeholder="Choose Product">
                                    <option label="Choose Product"></option>
                                    @foreach($product as $dev)
                                    <option value="{{$dev->id}}">{{$dev->title}}</option>
                                    @endforeach
                                </select>
                                @error('project_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Platform: <span class="tx-danger">*</span></label>
                                <select name="sosmed" class="form-control" value="{{old('sosmed')}}">
                                    <option value="instagram" selected>Instagram</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="google">Google</option>
                                </select>
                                @error('sosmed')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Budget: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" id="budget" name="budget"
                                    value="{{old('budget')}}" placeholder="Enter Budget">
                                @error('budget')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" id="gambar" name="gambar"
                                    placeholder="Enter Judul">
                            </div>
                        </div><!-- col-4 -->
                    </div>
                    <!-- /.box-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(function() {
    $('#form').on('submit', function(e) {
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
                    $("#addModal").modal("hide");
                    $('#form')[0].reset();
                    // alert(data.msg);
                    fetchAllCampaign();
                }
            }
        });
    });
    //Reset input file
    $('input[type="file"][name="product_image"]').val('');
    //Image preview
    $('input[type="file"][name="product_image"]').on('change', function() {
        var img_path = $(this)[0].value;
        var img_holder = $('.img-holder');
        var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
        if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
            if (typeof(FileReader) != 'undefined') {
                img_holder.empty();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('<img/>', {
                        'src': e.target.result,
                        'class': 'img-fluid',
                        'style': 'max-width:100px;margin-bottom:10px;'
                    }).appendTo(img_holder);
                }
                img_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                $(img_holder).html('This browser does not support FileReader');
            }
        } else {
            $(img_holder).empty();
        }
    });
    //Fetch all products
    fetchAllCampaign();

    function fetchAllCampaign() {
        $.get('{{route("get.campaign")}}', {}, function(data) {
            $('#AllCampaign').html(data.result);
        }, 'json');
    }

})
</script>
@endsection