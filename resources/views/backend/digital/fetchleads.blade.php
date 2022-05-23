<table class="table text-nowrap">
    <thead>
        <tr>
            <th style="width: 50px"> </th>
            <th style="width: 300px;">User</th>
            <th>Description</th>
            <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-active table-border-double">
            <td colspan="3">Data Leads</td>
            <td class="text-right">
                <span class="badge badge-primary badge-pill">{{$totaldl}}</span>
            </td>
        </tr>

        @foreach ($new as $post)
        <tr>
            <td class="text-center">
                <i class="icon-notification2 text-info"></i>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <a href="#" class="btn btn-teal rounded-pill btn-icon btn-sm">
                            <span class="letter-icon"></span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                        <div class="text-muted font-size-sm"><span class="badge badge-mark border-info mr-1"></span>
                            Baru</div>
                    </div>
                </div>
            </td>
            <td>
                <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body" data-toggle="modal"
                    data-target="#modal_leads">
                    <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                    <span class="text-muted">{{$post->tanggal}}</span>
                </a>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-radio-unchecked text-yellow"></i>
                                Follow up</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        @foreach($followup as $post)
        <tr>
            <td class="text-center">
                <div class="icon-phone2 text-yellow"></div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <a href="#" class="btn btn-warning rounded-pill btn-icon btn-sm">
                            <span class="letter-icon"></span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                        <div class="text-muted font-size-sm"><span class="badge badge-mark border-yellow mr-1"></span>
                            Follow Up</div>
                    </div>
                </div>
            </td>
            <td>
                <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body" data-toggle="modal"
                    data-target="#modal_leads">
                    <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                    <span class="text-muted">{{$post->tanggal}}</span>
                </a>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('admin/berminat/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-checkmark3 text-success"></i>
                                Berminat</a>
                            <a href="{{ url('admin/notint/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-cross2 text-danger"></i>
                                Tidak Tertarik</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        <tr class="table-active table-border-double">
            <td colspan="3">Berminat</td>
            <td class="text-right">
                <span class="badge badge-success badge-pill">{{$totalbm}}</span>
            </td>
        </tr>

        @foreach($closing as $post)
        <tr>
            <td class="text-center">
                <i class="icon-checkmark3 text-success"></i>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <a href="#" class="btn btn-success rounded-pill btn-icon btn-sm">
                            <span class="letter-icon"></span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                        <div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span>
                            Closing</div>
                    </div>
                </div>
            </td>
            <td>
                <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body" data-toggle="modal"
                    data-target="#modal_leads">
                    <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                    <span class="text-muted">{{$post->tanggal}}</span>
                </a>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a href="#" class="dropdown-item"><i class="icon-radio-unchecked text-yellow"></i>
                                Follow up</a> -->
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        @foreach($berminat as $post)
        <tr>
            <td class="text-center">
                <i class="icon-radio-unchecked text-success"></i>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <a href="#" class="btn btn-pink rounded-pill btn-icon btn-sm">
                            <span class="letter-icon"></span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                        <div class="text-muted font-size-sm"><span class="badge badge-mark border-success mr-1"></span>
                            Berminat</div>
                    </div>
                </div>
            </td>
            <td>
                <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body" data-toggle="modal"
                    data-target="#modal_leads">
                    <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                    <span class="text-muted">{{ $post->tanggal }}</span>
                </a>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('admin/closing/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-checkmark3 text-success"></i>
                                Closing</a>
                            <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-undo"></i>
                                Follow Up</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        <tr class="table-active table-border-double">
            <td colspan="3">Tidak Tertarik</td>
            <td class="text-right">
                <span class="badge badge-danger badge-pill">{{$totaltb}}</span>
            </td>
        </tr>

        @foreach($repurpose as $post)
        <tr>
            <td class="text-center">
                <i class="icon-spinner11 text-warning"></i>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <a href="#" class="btn btn-warning rounded-pill btn-icon btn-sm">
                            <span class="letter-icon"></span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                        <div class="text-muted font-size-sm"><span class="badge badge-mark border-warning mr-1"></span>
                            Repurpose</div>
                    </div>
                </div>
            </td>
            <td>
                <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body" data-toggle="modal"
                    data-target="#modal_leads">
                    <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                    <span class="text-muted">{{$post->tanggal}}</span>
                </a>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-undo"></i>
                                Follow Up</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach

        @foreach($notin as $post)
        <tr>
            <td class="text-center">
                <i class="icon-cross2 text-danger"></i>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <a href="#" class="btn btn-indigo rounded-pill btn-icon btn-sm">
                            <span class="letter-icon"></span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold letter-icon-title">{{$post->nama_cus}}</a>
                        <div class="text-muted font-size-sm"><span class="badge badge-mark border-danger mr-1"></span>
                            Tidak Tertarik</div>
                    </div>
                </div>
            </td>
            <td>
                <a href="javascript:void(0)" onclick="showDetail({{$post->id}})" class="text-body" data-toggle="modal"
                    data-target="#modal_leads">
                    <div class="font-weight-semibold">[#{{$post->id}}] {{$post->minat}}</div>
                    <span class="text-muted">{{$post->tanggal}}</span>
                </a>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('admin/followup/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-undo"></i>
                                Repurpose</a>
                            <a href="{{ url('admin/repurpose/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-spinner11 text-warning"></i>
                                Repurpose</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>