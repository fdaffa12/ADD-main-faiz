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
    <form class="wizzard-form pt-3" action="{{route('update.list')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$list->id}}">
        <h6>Pemilik</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Nama Pemilik: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_pemilik" value="{{$list->nama_pemilik}}"
                            placeholder="Enter Nama Pemilik">
                        @error('nama_pemilik')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">No KTP: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="ktp" value="{{$list->ktp}}"
                            placeholder="Enter ktp">
                        @error('ktp')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">No HP: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="nohp" name="nohp" value="{{$list->nohp}}"
                            placeholder="Enter Nomor Handphone">
                        @error('nohp')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Alamat: <span class="tx-danger">*</span></label>
                        <textarea name="alamat" rows="2" class="form-control"
                            placeholder="Enter alamat">{{$list->alamat}}</textarea>
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
                        <select name="unit" class="form-control">
                            <option value="Rumah" {{($list->unit === 'Rumah') ? 'Selected' : ''}}>Rumah</option>
                            <option value="Ruko" {{($list->unit === 'Ruko') ? 'Selected' : ''}}>Ruko</option>
                            <option value="Kaveling" {{($list->unit === 'Kaveling') ? 'Selected' : ''}}>Kaveling
                            </option>
                            <option value="Lain-lain" {{($list->unit === 'Lain-lain') ? 'Selected' : ''}}>Lain-lain
                            </option>
                        </select>
                        @error('unit')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Sertifikat: <span class="tx-danger">*</span></label>
                        <select name="sertifikat" class="form-control">
                            <option value="SHM" {{($list->sertifikat === 'SHM') ? 'Selected' : ''}}>SHM</option>
                            <option value="SHGB" {{($list->sertifikat === 'SHGB') ? 'Selected' : ''}}>SHGB</option>
                            <option value="AJB" {{($list->sertifikat === 'AJB') ? 'Selected' : ''}}>AJB</option>
                        </select>
                        @error('sertifikat')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">LB: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="lb" name="lb" value="{{$list->lb}}"
                            placeholder="Enter Luas Bangunan">
                        @error('lb')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">LT: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="lt" name="lt" value="{{$list->lt}}"
                            placeholder="Enter Luas Tanah">
                        @error('lt')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Spesifikasi: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="spesifikasi" value="{{$list->spesifikasi}}"
                            placeholder="Enter spesifikasi">
                        @error('spesifikasi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="harga" value="{{$list->harga}}"
                            placeholder="Enter harga">
                        @error('harga')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Jenis Listing: <span class="tx-danger">*</span></label>
                        <select name="jenis_listing" class="form-control">
                            <option value="Open" {{($list->jenis_listing === 'Open') ? 'Selected' : ''}}>Open</option>
                            <option value="Exclusive" {{($list->jenis_listing === 'Exclusive') ? 'Selected' : ''}}>
                                Exclusive
                            </option>
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
                        <textarea name="alamat_unit" rows="2" class="form-control"
                            placeholder="Enter alamat unit">{{$list->alamat_unit}}</textarea>
                        @error('alamat_unit')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Ketentuan: <span class="tx-danger">*</span></label>
                        <textarea name="ketentuan" rows="2" class="form-control"
                            placeholder="Enter Ketentuan">{{$list->ketentuan}}</textarea>
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
                        <input class="form-control" type="text" name="no_listing" value="{{$list->no_listing}}"
                            placeholder="Enter Nomor Listing">
                        @error('no_listing')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Negosiasi: <span class="tx-danger">*</span></label>
                        <select name="nego" class="form-control">
                            <option value="Ya" {{($list->nego === 'Ya') ? 'Selected' : ''}}>Ya
                            </option>
                            <option value="Tidak" {{($list->nego === 'Tidak') ? 'Selected' : ''}}>Tidak
                            </option>
                        </select>
                        @error('nego')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Komisi: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="komisi" value="{{$list->komisi}}"
                            placeholder="Enter Komisi">
                        @error('komisi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Marketing: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="marketing" value="{{$list->marketing}}"
                            placeholder="Enter Marketing">
                        @error('marketing')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="form-control-label">Referal: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="referal" value="{{$list->referal}}"
                            placeholder="Enter Referal">
                        @error('referal')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Gambar: <span class="tx-danger">*</span></label>
                        <img src="{{asset($list->gambar)}}" onclick="triggerClick()" id="profileDisplay">
                        <input class="form-control" type="file" name="gambar" onchange="displayImage(this)"
                            id="profileImage">
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