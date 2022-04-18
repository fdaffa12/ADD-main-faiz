@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/index-pages')}}" class="nav-link">Manage Pages</a>
    </li>
    <li class="nav-item"><a href="#" class="nav-link rounded-left active">Edit Pages</a>
    </li>
    </li>
</ul>

<div class="tab-content">
    <form action="{{route('update-pages')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$pages->id}}">
        <div class="box-body">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="judul" value="{{$pages->judul}}"
                        placeholder="Enter Judul">
                    @error('judul')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="exampleInputFile">Description</label>
                    <textarea class="form-control" name="description" rows="10"
                        cols="80">{{$pages->description}}</textarea>
                    @error('judul')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection