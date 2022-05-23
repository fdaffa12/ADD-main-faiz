<table class="table text-nowrap">
    <thead>
        <tr>
            <th>Campaign</th>
            <th>Developer</th>
            <th>Project</th>
            <th>Budget</th>
            <th>Status</th>
            <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-active table-border-double">
            <td colspan="6">Active</td>
        </tr>
        @foreach ($campaign as $post)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        @if( $post->sosmed == 'instagram' )
                        <a href="{{route('digital.detail', $post->id)}}"
                            class="btn bg-transparent border-warning text-warning rounded-pill border-3 btn-icon">
                            <i class="icon-{{$post->sosmed}}"></i>
                        </a>
                        @elseif( $post->sosmed == 'facebook' )
                        <a href="{{route('digital.detail', $post->id)}}"
                            class="btn bg-transparent border-info text-info rounded-pill border-3 btn-icon">
                            <i class="icon-{{$post->sosmed}}"></i>
                        </a>
                        @elseif( $post->sosmed == 'google' )
                        <a href="{{route('digital.detail', $post->id)}}"
                            class="btn bg-transparent border-danger text-danger rounded-pill border-3 btn-icon">
                            <i class="icon-{{$post->sosmed}}"></i>
                        </a>
                        @endif
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold"
                            style="text-transform:capitalize">{{$post->sosmed}}</a>
                        <div class="text-muted font-size-sm">
                            <span class="badge badge-mark border-primary mr-1"></span>
                            {{$post->durasi}}
                        </div>
                    </div>
                </div>
            </td>
            <td><span class="text-muted">{{$post->developer->nama_dev}}</span></td>
            <td><span class="text-muted">{{$post->project->title}}</span></td>
            <td>
                <h6 class="font-weight-semibold mb-0">@currency($post->budget)</h6>
            </td>
            <td><span class="badge badge-primary">Active</span></td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach


        <tr class="table-active table-border-double">
            <td colspan="6">Completed</td>
        </tr>
        <tr>
            @foreach ($completed as $post)
            <td>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-info text-info rounded-pill border-3 btn-icon">
                            <i class="icon-google"></i>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-body font-weight-semibold">{{$post->sosmed}}</a>
                        <div class="text-muted font-size-sm">
                            <span class="badge badge-mark border-primary mr-1"></span>
                            {{$post->durasi}}
                        </div>
                    </div>
                </div>
            </td>
            <td><span class="text-muted">{{$post->developer->nama_dev}}</span></td>
            <td><span class="text-muted">{{$post->project->title}}</span></td>
            <td>
                <h6 class="font-weight-semibold mb-0">@currency($post->budget)</h6>
            </td>
            <td><span class="badge badge-primary">Active</span></td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>