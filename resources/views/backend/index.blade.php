@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="/" class="nav-link rounded-left active" data-toggle="tab">Primary</a></li>
    <li class="nav-item"><a href="{{'secondary'}}" class="nav-link" data-toggle="tab">Secondary</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" id="solid-rounded-tab1">
        <div class="table-responsive">
            <table class="table text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 150px">Developer Name</th>
                        <th style="width: 300px;">Cluster</th>
                        <th>Description</th>
                        <th class="text-center" style="width: 20px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-default font-weight-semibold">Nama Developer 1</span></td>
                        <td class="text-default">
                            <div class="font-weight-semibold">Nama Cluster Blok</div>
                            <div class="font-weight-semibold">Jalan. Alamat Tempat</div>
                            <a href="#">
                                <div class="text-muted font-size-sm"><i class="icon-location3 mr-1"></i> Choose From Map
                                </div>
                            </a>
                        </td>
                        <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea. commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                        data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage
                                            Media</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Delete
                                            Developer</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="text-default font-weight-semibold">Nama Developer 2</span></td>
                        <td class="text-default">
                            <div class="font-weight-semibold">Nama Cluster Blok</div>
                            <div class="font-weight-semibold">Jalan. Alamat Tempat</div>
                            <a href="#">
                                <div class="text-muted font-size-sm"><i class="icon-location3 mr-1"></i> Choose From Map
                                </div>
                            </a>
                        </td>
                        <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea. commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                        data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage
                                            Media</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Delete
                                            Developer</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="text-default font-weight-semibold">Nama Developer 3</span></td>
                        <td class="text-default">
                            <div class="font-weight-semibold">Nama Cluster Blok</div>
                            <div class="font-weight-semibold">Jalan. Alamat Tempat</div>
                            <a href="#">
                                <div class="text-muted font-size-sm"><i class="icon-location3 mr-1"></i> Choose From Map
                                </div>
                            </a>
                        </td>
                        <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea. commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.</td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                        data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-file-picture"></i> Manage
                                            Media</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Delete
                                            Developer</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection