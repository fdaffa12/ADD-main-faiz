@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/publikasi')}}" class="nav-link">Manage Publikasi</a>
    </li>
    <li class="nav-item"><a href="#" class="nav-link rounded-left active">Edit Publikasi</a>
    </li>
</ul>

<div class="card p-2">
    <div class="col-12">
        <div class="tab-content">
            <form action="{{route('update-publikasi')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$publikasi->id}}">
                <div class="box-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="nama" value="{{$publikasi->nama}}"
                                placeholder="Enter Nama">
                            @error('nama')
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
@endsection