@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/index-pages')}}" class="nav-link">Manage Pages</a>
    </li>
    <li class="nav-item"><a href="{{url('admin/add-pages')}}" class="nav-link rounded-left active">Add Pages</a>
    </li>
    </li>
</ul>

<div class="tab-content">
    <form action="{{route('store-pages')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="judul" value="{{old('title')}}"
                        placeholder="Enter Judul">
                    @error('judul')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="exampleInputFile">Description</label>
                    <textarea class="form-control" name="description" rows="10" cols="80"></textarea>
                    @error('description')
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