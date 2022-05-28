@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')

<div class="card p-2">
    <div class="tab-content">
        <form action="{{route('update.campaign')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$detail->id}}">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_iklan" value="{{$detail->nama_iklan}}"
                            placeholder="Enter Judul">
                        @error('nama_iklan')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Budget: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="budget" value="{{$detail->budget}}"
                            placeholder="Enter Budget">
                        @error('budget')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Tanggal Awal Iklan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="date" name="durasi" value="{{$detail->durasi}}"
                            placeholder="Enter Durasi">
                        @error('durasi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Tanggal Akhir Iklan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="date" name="akhir_durasi" value="{{$detail->akhir_durasi}}"
                            placeholder="Enter Durasi">
                        @error('akhir_durasi')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Platform: <span class="tx-danger">*</span></label>
                        <select name="sosmed" class="form-control">
                            <option value="instagram" {{($detail->sosmed === 'instagram') ? 'Selected' : ''}}>Instagram
                            </option>
                            <option value="facebook" {{($detail->sosmed === 'facebook') ? 'Selected' : ''}}>Facebook
                            </option>
                            <option value="google" {{($detail->sosmed === 'google') ? 'Selected' : ''}}>Google
                            </option>
                        </select>
                        @error('sosmed')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Developer: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="developer_id" data-placeholder="Choose Category">
                            <option label="Choose Category"></option>
                            @foreach($developer as $dev)
                            <option value="{{$dev->id}}" {{$dev->id == $detail->developer_id ? "selected":""}}>
                                {{$dev->nama_dev}}
                            </option>
                            @endforeach
                        </select>
                        @error('developer_id')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Product: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="project_id" data-placeholder="Choose Category">
                            <option label="Choose Category"></option>
                            @foreach($product as $dev)
                            <option value="{{$dev->id}}" {{$dev->id == $detail->project_id ? "selected":""}}>
                                {{$dev->title}}
                            </option>
                            @endforeach
                        </select>
                        @error('project_id')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                </div><!-- col-4 -->
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                        <img src="{{ asset($detail->gambar) }}" onclick="triggerClick()" id="profileDisplay">
                        <input class="form-control" type="file" name="gambar" onchange="displayImage(this)"
                            id="profileImage" style="display:none;">
                        @error('gambar')
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