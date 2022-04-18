@extends('backend/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>
<script src="{{ asset('assets/js/demo_pages/form_wizard.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Wizard with validation -->
<div class="card">
    <form action="{{route('store.struktur')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" value="{{old('nama')}}"
                        placeholder="Enter nama">
                    @error('nama')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nip" value="{{old('nip')}}" placeholder="Enter NIK">
                    @error('nip')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Tempat Lahir: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="tempat_lahir" value="{{old('tempat_lahir')}}"
                        placeholder="Enter tempat lahir">
                    @error('tempat_lahir')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Tanggal Lahir: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="date" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"
                        placeholder="Enter tanggal_lahir">
                    @error('tanggal_lahir')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Pendidikan: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="pendidikan" value="{{old('pendidikan')}}"
                        placeholder="Enter pendidikan">
                    @error('pendidikan')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Jabatan: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="jabatan" value="{{old('jabatan')}}"
                        placeholder="Enter jabatan">
                    @error('jabatan')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Foto Pejabat: <span class="tx-danger">*</span></label>
                    <img src="{{asset('uploads')}}/default.png" onclick="triggerClick()" id="profileDisplay">
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