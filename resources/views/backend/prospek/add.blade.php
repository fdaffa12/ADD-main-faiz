@extends('backend/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>
<script src="{{ asset('assets/js/demo_pages/form_wizard.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Wizard with validation -->
<div class="card">
    <form action="{{route('store.prospek')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" value="{{old('nama')}}"
                        placeholder="Enter Nama">
                    @error('nama')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Alamat: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="alamat" value="{{old('alamat')}}"
                        placeholder="Enter Alamat">
                    @error('alamat')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">No HP: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nohp" value="{{old('nohp')}}"
                        placeholder="Enter No HP">
                    @error('nohp')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nik" value="{{old('nik')}}" placeholder="Enter NIK">
                    @error('nik')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Unit Yang Dituju: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="rumah" value="{{old('rumah')}}"
                        placeholder="Enter Unit Yang Dituju">
                    @error('rumah')
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