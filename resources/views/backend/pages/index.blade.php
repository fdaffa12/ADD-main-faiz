@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/index-pages')}}" class="nav-link rounded-left active">Manage Pages</a>
    </li>
    <li class="nav-item"><a href="{{url('admin/add-pages')}}" class="nav-link">Add Pages</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" id="solid-rounded-tab1">
        <div class="table-responsive">
            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Title Slug</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->judul }}</td>
                        <td>{{ $page->title_slug }}</td>
                        <td>{{ $page->created_at->format('Y-m-d') }}</td>
                        <td>
                            @if( $page->status == 0 )
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
                                        <a href="{{url('admin/edit-pages/'.$page->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Pages</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/delete-pages/'.$page->id)}}"
                                            onclick="return confirm('Are you sure?')" class="dropdown-item"><i
                                                class="icon-file-minus"></i> Delete
                                            Page</a>
                                        @if( $page->status == 0 )
                                        <a href="{{ url('admin/publish-pages/'.$page->id) }}" class="dropdown-item"><i
                                                class="icon-eye"></i>Publish</a>
                                        @else
                                        <a href="{{ url('admin/draft-pages/'.$page->id) }}" class="dropdown-item"><i
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