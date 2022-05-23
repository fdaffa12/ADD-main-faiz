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
            <td><img src="{{asset($post->image)}}" width="100px;" height="80px;" style="border-radius:10px;" alt="">
            </td>
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
                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage
                                            Media</a> -->
                            <!-- <a href="{{url('admin/edit-posts/'.$post->id)}}" class="dropdown-item"><i
                                    class="icon-file-text2"></i> Edit
                                Post</a> -->
                            <button class="dropdown-item" data-id="{{$post->id}}" id="editBtn"><i
                                    class="icon-file-text2"></i>
                                Edit Post</button>
                            <div class="dropdown-divider"></div>
                            <a href="{{url('admin/delete-posts/'.$post->id)}}" onclick="return confirm('Are you sure?')"
                                class="dropdown-item"><i class="icon-file-minus"></i> Delete
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