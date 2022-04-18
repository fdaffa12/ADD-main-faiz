@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/manage-post')}}" class="nav-link">Manage Post</a>
    </li>
    <li class="nav-item"><a href="#" class="nav-link rounded-left active">Edit Post</a>
    </li>
</ul>

<div class="tab-content">
    <form action="{{route('update.post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{$post->post_title}}"
                        placeholder="Enter Judul">
                    @error('post_title')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Publikasi: <span class="tx-danger">*</span></label>
                    <select class="form-control" name="postcat_id" data-placeholder="Choose Category">
                        <option label="Choose Category"></option>
                        @foreach($publikasis as $category)
                        <option value="{{$category->id}}" {{$category->id == $post->postcat_id ? "selected":""}}>
                            {{$category->nama}}
                        </option>
                        @endforeach
                    </select>
                    @error('postcat_id')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="exampleInputFile">Description</label>
                    <textarea class="form-control" name="description" rows="10"
                        cols="80">{{$post->description}}</textarea>
                    @error('judul')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                    <img src="{{asset($post->image)}}" onclick="triggerClick()" id="profileDisplay">
                    <input class="form-control" type="file" name="image" onchange="displayImage(this)" id="profileImage"
                        style="display:none;">
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
@endsection

<script>
function triggerClick() {
    document.querySelector('#profileImage').click();
}

function displayImage(e) {
    if (e.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
</script>

<style>
#profileDisplay {
    display: block;
    width: 60%;
    height: 120px;
    margin: 10px auto;
    border-radius: 16px;
}
</style>