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
                        <a href="{{route('digital.detail', $post->id)}}" class="text-body font-weight-semibold"
                            style="text-transform:capitalize">{{$post->sosmed}} - {{$post->nama_iklan}}</a>
                        <div class="text-muted font-size-sm">
                            <span class="badge badge-mark border-primary mr-1"></span>
                            {{date('j-F',strtotime($post->durasi))}} - {{date('j-F',strtotime($post->akhir_durasi))}}
                        </div>
                    </div>
                </div>
            </td>
            <td><span class="text-muted">{{$post->developer->nama_dev}}</span></td>
            <td><span class="text-muted">{{$post->project->title}}</span></td>
            <td>
                <h6 class="font-weight-semibold mb-0">@currency($post->budget)</h6>
            </td>
            <td>
                @if( $post->status == 0 )
                <span class="badge badge-secondary">Completed</span>
                @else
                <span class="badge badge-primary">Active</span>
                @endif
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @if (Auth::user()->email == 'admin@admin.com')
                            <a href="{{ url('admin/campaign/edit/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-file-text2"></i> Edit campaign</a>
                            @if( $post->status == 0 )
                            <a href="{{ url('admin/campaign/active/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-unlocked2"></i> Active </a>
                            @else
                            <a href="{{ url('admin/campaign/inactive/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-file-locked"></i> Campaign Completed</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('admin/campaign/delete/'.$post->id) }}"
                                class="dropdown-item delete-confirm"><i class="icon-eraser3"></i> Delete</a>
                            @elseif (Auth::user()->email == 'tele@marketing.com')
                            @endif
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
                        <a href="{{route('digital.detail', $post->id)}}" class="text-body font-weight-semibold"
                            style="text-transform:capitalize">{{$post->sosmed}} - {{$post->nama_iklan}}</a>
                        <div class="text-muted font-size-sm">
                            <span class="badge badge-mark border-primary mr-1"></span>
                            {{date('j-F',strtotime($post->durasi))}} - {{date('j-F',strtotime($post->akhir_durasi))}}
                        </div>
                    </div>
                </div>
            </td>
            <td><span class="text-muted">{{$post->developer->nama_dev}}</span></td>
            <td><span class="text-muted">{{$post->project->title}}</span></td>
            <td>
                <h6 class="font-weight-semibold mb-0">@currency($post->budget)</h6>
            </td>
            <td>
                @if( $post->status == 0 )
                <span class="badge badge-secondary">Completed</span>
                @else
                <span class="badge badge-primary">Active</span>
                @endif
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @if (Auth::user()->email == 'admin@admin.com')
                            <a href="{{ url('admin/campaign/edit/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-file-text2"></i> Edit campaign</a>
                            @if( $post->status == 0 )
                            <a href="{{ url('admin/campaign/active/'.$post->id) }}" class="dropdown-item"><i
                                    class="icon-unlocked2"></i> Active </a>
                            @else

                            @endif
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('admin/campaign/delete/'.$post->id) }}"
                                class="dropdown-item delete-confirm"><i class="icon-eraser3"></i> Delete</a>
                            @elseif (Auth::user()->email == 'tele@marketing.com')
                            @endif
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
.swal-modal {
    width: 478px;
    opacity: 0;
    pointer-events: none;
    background-color: #32333a;
    text-align: center;
    border-radius: 5px;
    position: static;
    margin: 20px auto;
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    z-index: 10001;
    transition: opacity .2s, -webkit-transform .3s;
    transition: transform .3s, opacity .2s;
    transition: transform .3s, opacity .2s, -webkit-transform .3s;
}

.swal-title {
    color: #fff;
    font-weight: 600;
    text-transform: none;
    position: relative;
    display: block;
    padding: 13px 16px;
    font-size: 27px;
    line-height: normal;
    text-align: center;
    margin-bottom: 0;
}

.swal-text {
    font-size: 16px;
    position: relative;
    float: none;
    line-height: normal;
    vertical-align: top;
    text-align: left;
    display: inline-block;
    margin: 0;
    padding: 0 10px;
    font-weight: 400;
    color: #fff;
    max-width: calc(100% - 20px);
    overflow-wrap: break-word;
    box-sizing: border-box;
}


.swal-button {
    background-color: #268bd2;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 14px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
}

.swal-button--cancel {
    color: #fff;
    background-color: #4d4d51;
}
</style>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$('.delete-confirm').on('click', function(event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>