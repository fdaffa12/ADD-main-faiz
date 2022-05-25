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
        <h6 class="card-title">Add Primary Developer</h6>
    </div>
    <div class="col-12">
        <form class="wizard-form pt-3" action="{{route('primary.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="title">Nama Cluster</label>
                        <input type="text" class="form-control" name="title" id="title">
                        @error('title')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="lb">Luas Bangunan</label>
                        <input type="text" class="form-control" name="lb" id="lb">
                        @error('lb')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="lt">Luas Tanah</label>
                        <input type="text" class="form-control" name="lt" id="lt">
                        @error('lt')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="kt">Kamar Tidur</label>
                        <input type="text" class="form-control" name="kt" id="kt">
                        @error('kt')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="km">Kamar Mandi</label>
                        <input type="text" class="form-control" name="km" id="km">
                        @error('km')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="lb">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                        @error('harga')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type">
                        @error('type')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Nama Developer: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="dev_id" data-placeholder="Choose Category">
                            <option label="Choose Category"></option>
                            @foreach($developer as $list)
                            <option value="{{$list->id}}">{{$list->nama_dev}}</option>
                            @endforeach
                        </select>
                        @error('dev_id')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" id="lokasi">
                        @error('lokasi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>


            </div><!-- /.box-body -->

            <div class="row">

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <textarea name="fasilitas" id="fasilitas" cols="20" rows="5" class="form-control"></textarea>
                        @error('fasilitas')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="body">Deskripsi</label>
                        <textarea name="body" id="body" cols="20" rows="5" class="form-control"></textarea>
                        @error('body')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Banner Image: <span class="tx-danger">*</span></label>
                        <!-- <img src="{{asset('uploads')}}/default.png" onclick="triggerClick()"
                                            id="profileDisplay"> -->
                        <input class="form-control" type="file" name="image" onchange="displayImage(this)"
                            id="profileImage">
                        @error('image')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Select images: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="cover_image[]" multiple>
                    </div>
                </div>
            </div>

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