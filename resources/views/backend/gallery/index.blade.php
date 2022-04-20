@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')

<div class="tab-content">
    <div class="tab-pane fade show active" id="solid-rounded-tab1">
        <div class="table-responsive">
            <table class="table text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 300px;">Image</th>
                        <th style="width: 150px">Cluster Name</th>
                        <th style="width: 150px">Nama Pemilik</th>
                        <th style="width: 150px">Harga</th>
                        <th style="width: 150px">LT/LB</th>
                        <th style="width: 150px">Lokasi</th>
                        <th style="width: 150px">Type</th>
                        <th style="width: 150px">Fasilitas</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 20px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $dt)
                    <tr>
                        <td><img src="{{asset($dt->image)}}" width="100px;" height="80px;" style="border-radius:10px;"
                                alt=""></td>
                        <td><span class="text-default font-weight-semibold">{{ $dt->title }}</span></td>
                        <td>{{$dt->listing->nama_pemilik}}</td>
                        <td>{{$dt->harga}}</td>
                        <td>{{$dt->lt}} / {{$dt->lb}}</td>
                        <td>{{$dt->lokasi}}</td>
                        <td>{{$dt->type}}</td>
                        <td>{{$dt->fasilitas}}</td>
                        <td>{!! substr($dt->description,0,90) !!}</td>
                        <td>
                            @if( $dt->status == 0 )
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
                                        <a href="{{route('gallery.images', $dt->id)}}" class="dropdown-item"><i
                                                class="icon-file-picture"></i> Manage
                                            Media</a>
                                        <a href="{{route('gallery.getByID', $dt->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/gallery/delete/'.$dt->id)}}"
                                            onclick="return confirm('Are you sure?')" class="dropdown-item"><i
                                                class="icon-file-minus"></i> Delete
                                            Developer</a>
                                        @if( $dt->status == 0 )
                                        <a href="{{ url('admin/publish-gallery/'.$dt->id) }}" class="dropdown-item"><i
                                                class="icon-eye"></i>Publish</a>
                                        @else
                                        <a href="{{ url('admin/draft-gallery/'.$dt->id) }}" class="dropdown-item"><i
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