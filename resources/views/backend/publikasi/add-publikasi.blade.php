@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/publikasi')}}" class="nav-link">Manage Publikasi</a>
    </li>
    <li class="nav-item"><a href="{{url('admin/add-publikasi')}}" class="nav-link rounded-left active">Add Publikasi</a>
    <li class="nav-item"><a href="{{url('admin/manage-post')}}" class="nav-link">Manage Post</a>
    <li class="nav-item"><a href="{{url('admin/add-post')}}" class="nav-link">Add Post</a>
    </li>
</ul>

<div class="tab-content">
    <form action="{{route('publikasi-store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" value="{{old('title')}}"
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
@endsection