@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')

<div class="tab-content">
    <div class="tab-pane fade show active" id="solid-rounded-tab1">
        <div class="table-responsive">
            <table class="table table-hover" id="table-datatables">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($struktur as $post)
                    <tr>
                        <td><img src="{{asset($post->image)}}" width="100px;" height="80px;" style="border-radius:10px;"
                                alt=""></td>
                        <td>{{ $post->nama }}</td>
                        <td>{{ $post->nip }}</td>
                        <td>{{ $post->tempat_lahir }}, {{$post->tanggal_lahir}}</td>
                        <td>{{ $post->jabatan }}</td>
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
                                        <a href="{{url('admin/edit-struktur/'.$post->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/delete-struktur/'.$post->id)}}"
                                            onclick="return confirm('Are you sure?')" class="dropdown-item"><i
                                                class="icon-file-minus"></i> Delete
                                            Struktur</a>
                                        @if( $post->status == 0 )
                                        <a href="{{ url('admin/publish-struktur/'.$post->id) }}"
                                            class="dropdown-item"><i class="icon-eye"></i>Publish</a>
                                        @else
                                        <a href="{{ url('admin/draft-struktur/'.$post->id) }}" class="dropdown-item"><i
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