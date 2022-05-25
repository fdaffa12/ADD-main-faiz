@extends('backend/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>
<script src="{{ asset('assets/js/demo_pages/form_wizard.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Wizard with validation -->
<div class="card">
    <div class="col-12">
        <form action="{{route('update.dev')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$developer->id}}">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Nama Developer: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_dev" value="{{$developer->nama_dev}}"
                            placeholder="Enter Nama Developer">
                        @error('nama_dev')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Lokasi: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="lokasi" value="{{$developer->lokasi}}"
                            placeholder="Enter Lokasi">
                        @error('lokasi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Link Lokasi: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="link_lokasi" value="{{$developer->link_lokasi}}"
                            placeholder="Enter Link Lokasi">
                        @error('link_lokasi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                        <img src="{{asset($developer->gambar)}}" onclick="triggerClick()" id="profileDisplay">
                        <input class="form-control" type="file" name="gambar" onchange="displayImage(this)"
                            id="profileImage">
                        @error('gambar')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleInputFile">Description</label>
                        <textarea class="form-control" name="desc" rows="2">{{$developer->desc}}</textarea>
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