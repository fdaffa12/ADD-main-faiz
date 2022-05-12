@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')

<div class="tab-content">
    <div class="tab-pane fade show active" id="solid-rounded-tab1">
        <div class="table-responsive">
            <table class="table datatable-responsive-row-control">
                <thead>
                    <tr>
                        <th style="width: 150px">Nama Pemilik</th>
                        <th style="width: 300px;">Image</th>
                        <th>KTP</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                        <th>Unit</th>
                        <th>Alamat Unit</th>
                        <th>Sertifikat</th>
                        <th>LB/LT</th>
                        <th style="width: 50px;">Spesifikasi</th>
                        <th>Negotiable</th>
                        <th>Harga</th>
                        <th>Jenis Listing</th>
                        <th>Komisi</th>
                        <th>Nama Marketing</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 20px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listing as $list)
                    <tr>
                        <td><span class="text-default font-weight-semibold"> {{ $list->nama_pemilik }}</span></td>
                        <td><img src="{{asset($list->gambar)}}" width="100px;" height="80px;"
                                style="border-radius:10px;" alt=""></td>
                        <td>{{$list->ktp}}</td>
                        <td>{{$list->alamat}}</td>
                        <td>{{$list->nohp}}</td>
                        <td>{{$list->unit}}</td>
                        <td>{{$list->alamat_unit}}</td>
                        <td>{{$list->sertifikat}}</td>
                        <td>{{$list->lb}} / {{$list->lt}}</td>
                        <td class="text-wrap">{{$list->spesifikasi}}</td>
                        <td>{{$list->nego}}</td>
                        <td>{{$list->harga}}</td>
                        <td>{{$list->jenis_listing}}</td>
                        <td>{{$list->komisi}}</td>
                        <td>{{$list->marketing}}</td>
                        <td>{{$list->ketentuan}}</td>
                        <td>
                            @if( $list->status == 0 )
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
                                        @if( $list->status == 0 )
                                        <a href="{{ url('admin/publish-list/'.$list->id) }}" class="dropdown-item"><i
                                                class="icon-eye"></i>Publish</a>
                                        @else
                                        <a href="{{ url('admin/draft-list/'.$list->id) }}" class="dropdown-item"><i
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