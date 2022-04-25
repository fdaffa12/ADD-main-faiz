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
                        <th style="width: 150px">Name</th>
                        <th>Alamat</th>
                        <th>No Handphone</th>
                        <th>NIK</th>
                        <th>Unit Yang Dituju</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 20px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prospek as $dt)
                    <tr>
                        <td><span class="text-default font-weight-semibold">{{ $dt->nama }}</span></td>
                        <td>{{$dt->alamat}}</td>
                        <td>{{$dt->nohp}}</td>
                        <td>{{$dt->nik}}</td>
                        <td>{{$dt->rumah}}</td>
                        <td>{{$dt->created_at->format('m/d/Y')}}</td>
                        <td>
                            @if( $dt->status == 0 )
                            <label class="label label-info">Belum Cocok</label>
                            @else
                            <label class="label label-info">Bagus</label>
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
                                        @if( $dt->status == 0 )
                                        <a href="{{ url('admin/publish-prospek/'.$dt->id) }}" class="dropdown-item"><i
                                                class="icon-eye"></i>Bagus</a>
                                        @else
                                        <a href="{{ url('admin/draft-prospek/'.$dt->id) }}" class="dropdown-item"><i
                                                class="icon-eye-blocked"></i>
                                            Belum Cocok</a>
                                        @endif
                                        <a href="{{url('admin/edit-prospek/'.$dt->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/delete-prospek/'.$dt->id)}}" class="dropdown-item"><i
                                                class="icon-file-minus"></i> Delete
                                            Prospek</a>
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