@extends('backend/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>
<script src="{{ asset('assets/js/demo_pages/form_wizard.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Wizard with validation -->
<div class="card">

    <form action="{{route('update.prospek')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$prospek->id}}">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nama" value="{{$prospek->nama}}"
                        placeholder="Enter Nama">
                    @error('nama')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Alamat: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="alamat" value="{{$prospek->alamat}}"
                        placeholder="Enter Alamat">
                    @error('alamat')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">No HP: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nohp" value="{{$prospek->nohp}}"
                        placeholder="Enter No HP">
                    @error('nohp')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nik" value="{{$prospek->nik}}"
                        placeholder="Enter NIK">
                    @error('nik')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Unit: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="rumah" value="{{$prospek->rumah}}"
                        placeholder="Enter Unit">
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