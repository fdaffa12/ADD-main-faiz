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
                    <label class="form-control-label">Leads By: <span class="tx-danger">*</span></label>
                    <select name="leads_by" class="form-control" value="{{old('leads_by')}}">
                        <option value="FB Inbox" selected>FB Inbox</option>
                        <option value="FB Comment">FB Comment</option>
                        <option value="IG Inbox">IG Inbox</option>
                        <option value="IG Comment">IG Comment</option>
                        <option value="WhatsApp">WhatsApp</option>
                    </select>
                    @error('leads_by')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
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
                    <label class="form-control-label">Prospect Status: <span class="tx-danger">*</span></label>
                    <select name="pr_status" class="form-control" value="{{old('pr_status')}}">
                        <option value="Prospect" selected>Prospect</option>
                        <option value="Not Good">Not Good</option>
                        <option value="Hot Prospect">Hot Prospect</option>
                        <option value="Not Respond">Not Respond</option>
                    </select>
                    @error('pr_status')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Project Ads: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="rumah" value="{{old('rumah')}}"
                        placeholder="Enter Project Ads">
                    @error('rumah')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Note: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="note" value="{{old('note')}}"
                        placeholder="Enter Note">
                    @error('note')
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