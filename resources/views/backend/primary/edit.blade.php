@extends('backend/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>
<script src="{{ asset('assets/js/demo_pages/form_wizard.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Wizard with validation -->
<div class="card">
    <div class="card-header bg-primary header-elements-inline">
        <h6 class="card-title">Edit Primary Developer</h6>
    </div>
    <div class="col-12">
        <form class="wizard-form pt-3" action="{{route('primary.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="title" value="{{$data->title}}"
                            placeholder="Enter Judul">
                        @error('title')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="harga" value="{{$data->harga}}"
                            placeholder="Enter Judul">
                        @error('harga')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Luas Tanah: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="lt" value="{{$data->lt}}"
                            placeholder="Enter Judul">
                        @error('lt')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Luas Bangunan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="lb" value="{{$data->lb}}"
                            placeholder="Enter Luas Bangunan">
                        @error('lb')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Kamar Tidur: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="kt" value="{{$data->kt}}"
                            placeholder="Enter Kamar Tidur">
                        @error('kt')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Kamar Mandi: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="km" value="{{$data->km}}"
                            placeholder="Enter Kamar Mandi">
                        @error('km')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Type Rumah: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="type" value="{{$data->type}}"
                            placeholder="Enter Type Rumah">
                        @error('type')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Pemilik: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="dev_id" data-placeholder="Choose Category">
                            <option label="Choose Category"></option>
                            @foreach($developer as $category)
                            <option value="{{$category->id}}" {{$category->id == $data->dev_id ? "selected":""}}>
                                {{$category->nama_dev}}
                            </option>
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
                        <input class="form-control" type="text" name="lokasi" value="{{$data->lokasi}}"
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
                        <textarea name="fasilitas" id="body" cols="20" rows="5"
                            class="form-control">{{$data->fasilitas}}</textarea>
                        @error('fasilitas')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="exampleInputFile">Deskripsi</label>
                        <textarea name="description" id="body" cols="20" rows="5"
                            class="form-control">{{$data->description}}</textarea>
                        @error('description')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                        <img src="{{asset($data->image)}}" onclick="triggerClick()" id="profileDisplay">
                        <input class="form-control" type="file" name="image" onchange="displayImage(this)"
                            id="profileImage">
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
<!-- /wizard with validation -->
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
    height: 90px;
    margin: 10px auto;
    border-radius: 16px;
}
</style>