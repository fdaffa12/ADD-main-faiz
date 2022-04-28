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
                    <label class="form-control-label">Leads BY: <span class="tx-danger">*</span></label>
                    <select name="leads_by" class="form-control">
                        <option value="FB Inbox" {{($prospek->leads_by === 'FB Inbox') ? 'Selected' : ''}}>FB Inbox
                        </option>
                        <option value="FB Comment" {{($prospek->leads_by === 'FB Comment') ? 'Selected' : ''}}>FB
                            Comment
                        </option>
                        <option value="IG Inbox" {{($prospek->leads_by === 'IG Inbox') ? 'Selected' : ''}}>IG Inbox
                        </option>
                        <option value="IG Comment" {{($prospek->leads_by === 'IG Comment') ? 'Selected' : ''}}>IG
                            Comment
                        </option>
                        <option value="WhatsApp" {{($prospek->leads_by === 'WhatsApp') ? 'Selected' : ''}}>WhatsApp
                        </option>
                    </select>
                    @error('leads_by')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
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
                    <label class="form-control-label">Prospek Status: <span class="tx-danger">*</span></label>
                    <select name="pr_status" class="form-control">
                        <option value="Prospect" {{($prospek->pr_status === 'Prospect') ? 'Selected' : ''}}>Prospect
                        </option>
                        <option value="Not Good" {{($prospek->pr_status === 'Not Good') ? 'Selected' : ''}}>Not Good
                        </option>
                        <option value="Hot Prospect" {{($prospek->pr_status === 'Hot Prospect') ? 'Selected' : ''}}>Hot
                            Prospect
                        </option>
                        <option value="Not Respond" {{($prospek->pr_status === 'Not Respond') ? 'Selected' : ''}}>Not
                            Respond
                        </option>
                    </select>
                    @error('pr_status')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Project Ads: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="rumah" value="{{$prospek->rumah}}"
                        placeholder="Enter Project Ads">
                    @error('rumah')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Note: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="note" value="{{$prospek->note}}"
                        placeholder="Enter Unit">
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