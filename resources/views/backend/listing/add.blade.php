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
        <h6 class="card-title">Add Listing</h6>
    </div>
    <form class="wizzard-form pt-3" action="{{route('store.listing')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h6>Pemilik</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Nama Pemilik: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_pemilik" value="{{old('nama_pemilik')}}"
                            placeholder="Enter Nama Pemilik">
                        @error('nama_pemilik')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">No KTP: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="ktp" value="{{old('ktp')}}"
                            placeholder="Enter ktp">
                        @error('ktp')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">No HP: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="nohp" name="nohp" value="{{old('nohp')}}"
                            placeholder="Enter Nomor Handphone">
                        @error('nohp')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Alamat: <span class="tx-danger">*</span></label>
                        <textarea name="alamat" rows="2" class="form-control" value="{{old('alamat')}}"
                            placeholder="Enter alamat"></textarea>
                        @error('alamat')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
            </div><!-- /.row -->
        </fieldset>
        <h6>Detail Unit</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Unit: <span class="tx-danger">*</span></label>
                        <select name="unit" class="form-control" value="{{old('unit')}}">
                            <option value="Rumah" selected>Rumah</option>
                            <option value="Ruko">Ruko</option>
                            <option value="Kaveling">Kaveling</option>
                        </select>
                        @error('unit')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Sertifikat: <span class="tx-danger">*</span></label>
                        <select name="sertifikat" class="form-control" value="{{old('sertifikat')}}">
                            <option value="SHM" selected>SHM</option>
                            <option value="SHGB">SHGB</option>
                            <option value="AJB">AJB</option>
                        </select>
                        @error('sertifikat')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">LB: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="lb" name="lb" value="{{old('lb')}}"
                            placeholder="Enter Luas Bangunan">
                        @error('lb')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">LT: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="lt" name="lt" value="{{old('lt')}}"
                            placeholder="Enter Luas Tanah">
                        @error('lt')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Spesifikasi: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="spesifikasi" value="{{old('spesifikasi')}}"
                            placeholder="Enter spesifikasi">
                        @error('spesifikasi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="harga" value="{{old('harga')}}"
                            placeholder="Enter harga">
                        @error('harga')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Jenis Listing: <span class="tx-danger">*</span></label>
                        <select name="jenis_listing" class="form-control" value="{{old('jenis_listing')}}">
                            <option value="Ya" selected>Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        @error('jenis_listing')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Alamat Unit: <span class="tx-danger">*</span></label>
                        <textarea name="alamat_unit" rows="2" class="form-control" value="{{old('alamat_unit')}}"
                            placeholder="Enter alamat unit"></textarea>
                        @error('alamat_unit')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Ketentuan: <span class="tx-danger">*</span></label>
                        <textarea name="ketentuan" rows="2" class="form-control" value="{{old('ketentuan')}}"
                            placeholder="Enter Ketentuan"></textarea>
                        @error('ketentuan')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
            </div>
        </fieldset>
        <h6>Detail Listing</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Nomor Listing: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="no_listing" value="{{old('no_listing')}}"
                            placeholder="Enter Nomor Listing">
                        @error('no_listing')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Negosiasi: <span class="tx-danger">*</span></label>
                        <select name="nego" class="form-control" value="{{old('nego')}}">
                            <option value="Jual" selected>Jual</option>
                            <option value="Sewa">Sewa</option>
                        </select>
                        @error('nego')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Marketing: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="marketing" value="{{old('marketing')}}"
                            placeholder="Enter Marketing">
                        @error('marketing')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Referal: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="referal" value="{{old('referal')}}"
                            placeholder="Enter Referal">
                        @error('referal')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Gambar: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="gambar" value="{{old('gambar')}}"
                            placeholder="Masukan Gambar">
                        @error('gambar')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
            </div><!-- /.row -->
        </fieldset>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /wizard with validation -->
@endsection