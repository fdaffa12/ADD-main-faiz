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
                        <th style="width: 150px">Developer Name</th>
                        <th style="width: 300px;">Image</th>
                        <th>Description</th>
                        <th class="text-center" style="width: 20px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($developer as $dt)
                    <tr>
                        <td><span class="text-default font-weight-semibold">{{ $dt->nama_dev }}</span></td>
                        <td><img src="{{asset($dt->gambar)}}" width="100px;" height="80px;" style="border-radius:10px;"
                                alt=""></td>
                        <td>{!! substr($dt->desc,0,100) !!}</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                        data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- <a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage
                                            Media</a> -->
                                        <a href="{{url('admin/edit-dev/'.$dt->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/delete-dev/'.$dt->id)}}" class="dropdown-item"><i
                                                class="icon-file-minus"></i> Delete
                                            Developer</a>
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