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
                        <th style="width: 150px">Nama Pemilik</th>
                        <th style="width: 300px;">Image</th>
                        <th>KTP</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                        <th>Unit</th>
                        <th class="text-center" style="width: 20px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listing as $list)
                    <tr>
                        <td><span class="text-default font-weight-semibold">{{ $list->nama_pemilik }}</span></td>
                        <td><img src="{{asset($list->gambar)}}" width="100px;" height="80px;"
                                style="border-radius:10px;" alt=""></td>
                        <td>{{$list->ktp}}</td>
                        <td>{{$list->alamat}}</td>
                        <td>{{$list->nohp}}</td>
                        <td>{{$list->unit}}</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                        data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- <a href="{{route('gallery.images', $list->id)}}" class="dropdown-item"><i
                                                class="icon-file-picture"></i> Manage
                                            Media</a> -->
                                        <a href="{{url('admin/edit-list/'.$list->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/delete-list/'.$list->id)}}"
                                            onclick="return confirm('Are you sure?')" class="dropdown-item"><i
                                                class="icon-file-minus"></i> Delete
                                            Listing</a>
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