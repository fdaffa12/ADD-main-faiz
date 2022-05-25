@extends('backend/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>
<script src="{{ asset('assets/js/demo_pages/form_wizard.js') }}"></script>
@endsection
@section('dashcontent')
<!-- Wizard with validation -->
<div class="card col-12">
    <div class="card-header bg-primary header-elements-inline">
        <h6 class="card-title">Setting Profile</h6>
    </div>
    @if ($data->count() < 1) <form class="wizard-form pt-3" action="{{route('setting.store')}}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                <input type="phone" name="phone" class="form-control" placeholder="Enter your phone number">
                @error('phone')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-control-label">Fax: <span class="tx-danger">*</span></label>
                <input type="fax" name="fax" class="form-control" placeholder="Enter your fax number">
                @error('fax')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                @error('email')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputFile">About</label>
                <textarea name="about" class="form-control" rows="10"></textarea>
                @error('about')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Visi</label>
                <textarea name="visi" class="form-control" rows="10"></textarea>
                @error('visi')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Misi</label>
                <textarea name="misi" class="form-control" rows="10"></textarea>
                @error('misi')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                <textarea name="address" class="form-control"></textarea>
                @error('address')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div id="socialFieldGroup">
                <div class="form-group">
                    <label>Social</label>
                    <input type="url" name="social[]" class="form-control">
                    <p class="text-muted">e.g https://www/facebook.com/webtrickshome</p>
                </div>
            </div>
            <div class="text-right form-group">
                <span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
            </div>
            <div class="form-group">
                <div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Sorry !</strong> You've reached the social fields limit.
                </div>
            </div>
            <div class="form-group">
                <label class="form-control-label">Logo: <span class="tx-danger">*</span></label>
                <img src="{{asset('uploads')}}/default.png" onclick="triggerClick()" id="profileDisplay">
                <input class="form-control" type="file" name="image" onchange="displayImage(this)" id="profileImage">
                @error('image')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-control-label">Gambar Kontent: <span class="tx-danger">*</span></label>
                <img src="{{asset('uploads')}}/default.png" onclick="triggerClick()" id="profileDisplay">
                <input class="form-control" type="file" name="gambar" onchange="displayImage(this)" id="profileImage">
                @error('gambar')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        <script>
        var socialCounter = 1;
        $('#addSocialField').click(function() {
            socialCounter++;
            if (socialCounter > 5) {
                $('#socialAlert').removeClass('noshow');
                return;
            }
            newDiv = $(document.createElement('div')).attr("class", "form-group");
            newDiv.after().html(
                '<input type="url" name="social[]" class="form-control" ></div>');
            newDiv.appendTo("#socialFieldGroup");
        })
        </script>
        @else
        <form class="wizard-form pt-3" action="{{route('update.setting')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="box-body">
                <div class="form-group">
                    <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                    <input type="phone" name="phone" class="form-control" placeholder="Enter your phone number"
                        value="{{$data->phone}}">
                    @error('phone')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Fax: <span class="tx-danger">*</span></label>
                    <input type="fax" name="fax" class="form-control" placeholder="Enter your fax number"
                        value="{{$data->fax}}">
                    @error('fax')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email"
                        value="{{$data->email}}">
                    @error('email')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">About</label>
                    <textarea name="about" class="form-control" rows="10">{{$data->about}}</textarea>
                    @error('about')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Visi</label>
                    <textarea name="visi" class="form-control" rows="10">{{$data->visi}}</textarea>
                    @error('visi')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Misi</label>
                    <textarea name="misi" class="form-control" rows="10">{{$data->misi}}</textarea>
                    @error('misi')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                    <textarea name="address" class="form-control">{{$data->address}}</textarea>
                    @error('address')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div id="socialFieldGroup">
                    <div class="form-group">
                        <label>Social</label>
                        @foreach($data->social as $social)
                        <div class="form-group">
                            <input type="url" name="social[]" class="form-control socialCount" value="{{$social}}">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-right form-group">
                    <span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
                </div>
                <div class="form-group">
                    <div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Sorry !</strong> You've reached the social fields limit.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-control-label">Logo: <span class="tx-danger">*</span></label>
                <img src="{{asset($data->image)}}" onclick="triggerClick()" id="profileDisplay">
                <input class="form-control" type="file" name="image" onchange="displayImage(this)" id="profileImage">
                @error('image')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-control-label">Gambar Kontent: <span class="tx-danger">*</span></label>
                <img src="{{asset($data->gambar)}}" onclick="triggerClick()" id="profileDisplay">
                <input class="form-control" type="file" name="gambar" onchange="displayImage(this)" id="profileImage">
                @error('gambar')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<script>
socialCounter = $('.socialCount').length;
$('#addSocialField').click(function() {
    socialCounter++;
    if (socialCounter > 5) {
        $('#socialAlert').removeClass('noshow');
        return;
    }
    newDiv = $(document.createElement('div')).attr("class", "form-group");
    newDiv.after().html('<input type="url" name="social[]" class="form-control" ></div>');
    newDiv.appendTo("#socialFieldGroup");
})
</script>
@endif
</div>
<!-- /wizard with validation -->
@endsection


<style>
#profileDisplay {
    display: block;
    width: 60%;
    height: 120px;
    margin: 10px auto;
    border-radius: 16px;
}
</style>
<style>
.noshow {
    display: none;
}
</style>

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