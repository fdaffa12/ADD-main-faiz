@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
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
            <table class="table text-nowrap">
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
                    <tr>
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
                                        <!-- <a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage
                                            Media</a> -->
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
            </table>
        </div>
    </div>

</div>
@endsection