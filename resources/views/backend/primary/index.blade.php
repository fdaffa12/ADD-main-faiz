@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<div class="card">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="solid-rounded-tab1">
            <div class="table-responsive">
                <table class="table datatable-responsive-row-control">
                    <thead>
                        <tr>
                            <th></th>
                            <th style="width: 150px">Cluster Name</th>
                            <th style="width: 150px;">Image</th>
                            <th>Nama Pemilik</th>
                            <th>Harga</th>
                            <th>LT/LB</th>
                            <th>Lokasi</th>
                            <th>Type</th>
                            <th style="width: 50px;">Fasilitas</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th class="text-center" style="width: 20px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($primaries as $dt)
                        <tr>
                            <td></td>
                            <td><span class="text-default font-weight-semibold">{{ $dt->title }}</span></td>
                            <td><img src="{{asset($dt->image)}}" width="100px;" height="80px;"
                                    style="border-radius:10px;" alt=""></td>
                            <td> {{$dt->developer->nama_dev}}</td>
                            <td>{{$dt->harga}}</td>
                            <td>{{$dt->lt}} / {{$dt->lb}}</td>
                            <td style="white-space: nowrap;">{{$dt->lokasi}}</td>
                            <td>{{$dt->type}}</td>
                            <td style="white-space: nowrap;">{{$dt->fasilitas}}</td>
                            <td>{{$dt->description}}</td>
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
                                            <a href="{{route('primary.images', $dt->id)}}" class="dropdown-item"><i
                                                    class="icon-file-picture"></i> Manage
                                                Media</a>
                                            <a href="{{route('primary.getByID', $dt->id)}}" class="dropdown-item"><i
                                                    class="icon-file-text2"></i> Edit
                                                Detail</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{url('admin/primary/delete/'.$dt->id)}}"
                                                onclick="return confirm('Are you sure?')" class="dropdown-item"><i
                                                    class="icon-file-minus"></i> Delete
                                                Developer</a>
                                            @if( $dt->status == 0 )
                                            <a href="{{ url('admin/publish-primary/'.$dt->id) }}"
                                                class="dropdown-item"><i class="icon-eye"></i>Publish</a>
                                            @else
                                            <a href="{{ url('admin/draft-primary/'.$dt->id) }}" class="dropdown-item"><i
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
</div>
@endsection