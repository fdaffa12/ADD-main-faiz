@extends('backend/dashboard')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('')
@endsection
@section('dashcontent')

<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">
    Add Post
</button>

<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/publikasi')}}" class="nav-link">Manage Publikasi</a>
    </li>
    <li class="nav-item"><a href="{{url('admin/add-publikasi')}}" class="nav-link">Add Publikasi</a>
    <li class="nav-item"><a href="{{url('admin/manage-post')}}" class="nav-link  rounded-left active">Manage Post</a>
    <li class="nav-item"><a href="{{url('admin/add-post')}}" class="nav-link">Add Post</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" id="solid-rounded-tab1">
        <div class="table-responsive">
            <div id="AllProducts">

            </div>
            <!-- <table class="table text-nowrap">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Publikasi</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr id="{{$post->id}}">
                        <td><img src="{{asset($post->image)}}" width="100px;" height="80px;" style="border-radius:10px;"
                                alt=""></td>
                        <td>{{ $post->post_title }}</td>
                        <td>{{ $post->publikasi->nama }}</td>
                        <td>{{ $post->created_at->format('Y-m-d') }}</td>
                        <td>
                            @if( $post->status == 0 )
                            <label class="label label-info">Unpublish</label>
                            @else
                            <label class="label label-info">Published</label>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                        data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{url('admin/edit-posts/'.$post->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Post</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/delete-posts/'.$post->id)}}"
                                            onclick="return confirm('Are you sure?')" class="dropdown-item"><i
                                                class="icon-file-minus"></i> Delete
                                            Post</a>
                                        @if( $post->status == 0 )
                                        <a href="{{ url('admin/publish-posts/'.$post->id) }}" class="dropdown-item"><i
                                                class="icon-eye"></i>Publish</a>
                                        @else
                                        <a href="{{ url('admin/draft-posts/'.$post->id) }}" class="dropdown-item"><i
                                                class="icon-eye-blocked"></i>
                                            Draft</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> -->
        </div>
    </div>

</div>

<!-- modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form id="form" action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="post_title" name="post_title"
                                    value="{{old('title')}}" placeholder="Enter Judul">
                                @error('post_title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Publikasi: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="postcat_id" id="postcat_id"
                                    data-placeholder="Choose Category">
                                    <option label="Choose Category"></option>
                                    @foreach($publikasi as $category)
                                    <option value="{{$category->id}}">{{$category->nama}}</option>
                                    @endforeach
                                </select>
                                @error('postcat_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" id="image" name="image" value="{{old('title')}}"
                                    placeholder="Enter Judul">
                                @error('image')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputFile">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="10"
                                    cols="80"></textarea>
                                @error('description')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">
                            Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- edit -->
<div class="modal fade editPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form id="update_form" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="post_title" name="post_title"
                                    value="{{old('title')}}" placeholder="Enter Judul">
                                @error('post_title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Publikasi: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="postcat_id" id="postcat_id"
                                    data-placeholder="Choose Category">
                                    <option label="Choose Category"></option>
                                    @foreach($publikasi as $category)
                                    <option value="{{$category->id}}">{{$category->nama}}</option>
                                    @endforeach
                                </select>
                                @error('postcat_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" id="image" name="image" value="{{old('title')}}"
                                    placeholder="Enter Judul">
                                @error('image')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputFile">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="10"
                                    cols="80"></textarea>
                                @error('description')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">
                            Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(function() {
    $('#form').on('submit', function(e) {
        e.preventDefault();
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function() {
                $(form).find('span.error-text').text('');
            },
            success: function(data) {
                if (data.code == 0) {
                    $.each(data.error, function(prefix, val) {
                        $(form).find('span.' + prefix + '_error').text(val[0]);
                    });
                } else {
                    $("#addModal").modal("hide");
                    $('#form')[0].reset();
                    // alert(data.msg);
                    fetchAllProducts();
                }
            }
        });
    });
    //Reset input file
    $('input[type="file"][name="product_image"]').val('');
    //Image preview
    $('input[type="file"][name="product_image"]').on('change', function() {
        var img_path = $(this)[0].value;
        var img_holder = $('.img-holder');
        var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
        if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
            if (typeof(FileReader) != 'undefined') {
                img_holder.empty();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('<img/>', {
                        'src': e.target.result,
                        'class': 'img-fluid',
                        'style': 'max-width:100px;margin-bottom:10px;'
                    }).appendTo(img_holder);
                }
                img_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                $(img_holder).html('This browser does not support FileReader');
            }
        } else {
            $(img_holder).empty();
        }
    });
    //Fetch all products
    fetchAllProducts();

    function fetchAllProducts() {
        $.get('{{route("get.post")}}', {}, function(data) {
            $('#AllProducts').html(data.result);
        }, 'json');
    }

    //edit
    $(document).on('click', '#editBtn', function() {
        var post_id = $(this).data('id');
        var url = '{{route("editPost.ajax")}}';
        $.get(url, {
            post_id: post_id
        }, function(data) {
            // alert(data.result.post_title);
            var post_modal = $('.editPostModal');
            $(post_modal).find('form').find('input[name="id"]').val(data.result.id);
            $(post_modal).find('form').find('input[name="post_title"]').val(data.result
                .post_title);

            $(post_modal).modal('show');
        }, 'json');
    })

})
</script>
@endsection