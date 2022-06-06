<table class="table datatable-button-init-basic">
    <thead>
        <tr>
            <th>Product</th>
            <th>Description</th>
            <th>LB / LT</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($developer as $dt)
        <tr class="table-active table-border-double">
            <td colspan="7">{{$dt->nama_dev}}</td>
        </tr>
        @foreach ($primaries as $prim)
        @if($dt->id == $prim->dev_id)
        <tr id="{{$prim->id}}">
            <td>
                <div class="d-flex align-items-center">
                    <div>
                        <a href="#" class="text-default font-weight-semibold"
                            style="white-space: nowrap;">{{$prim->title}}</a>
                        <div class="font-size-sm">
                            <span class="badge badge-mark border-slate-400 mr-1"></span>
                            <a href="javascript:void(0)" onclick="showDetail({{$prim->id}})" data-toggle="modal"
                                data-target="#modal_facility" class="text-muted">Show Detail</a>
                            <!-- <a href="javascript:void(0)" onclick="editPrimary({{$prim->id}})"
                                                    data-toggle="modal" data-target="#modal_facility"
                                                    class="text-muted">Show Facility</a> -->
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <img src="{{asset($prim->image)}}" width="100px;" height="80px;" x;" alt="">
            </td>
            </td>
            <td><span class="text-muted">{{$prim->lb}} / {{$prim->lt}}</span></td>
            <td>
                <h6 class="font-weight-semibold mb-0">@currency($prim->harga)</h6>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0)" onclick="editPrimary({{$prim->id}})" data-toggle="modal"
                                data-target="#modal_facility" class="dropdown-item"><i class="icon-file-text2"></i>
                                Edit Fasility</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-picture"></i>
                                Manage Media</a>
                            <a href="javascript:void(0)" onclick="editDetailPrimary({{$prim->id}})"
                                class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                Product</a>
                            @if( $prim->status == 0 )
                            <a href="{{ url('admin/publish-primary/'.$prim->id) }}" class="dropdown-item"><i
                                    class="icon-eye"></i>Publish</a>
                            @elseif ( $prim->status == 1 )
                            <a href="{{ url('admin/draft-primary/'.$prim->id) }}" class="dropdown-item"><i
                                    class="icon-eye-blocked"></i>
                                Draft</a>
                            <a href="{{ url('admin/highlight-primary/'.$prim->id) }}" class="dropdown-item"><i
                                    class="icon-pushpin"></i>Highlight</a>
                            @elseif ( $prim->status == 2 )
                            <a href="{{ url('admin/publish-primary/'.$prim->id) }}" class="dropdown-item"><i
                                    class="icon-eye"></i>Publish</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a href="{{url('admin/primary/delete/'.$prim->id)}}" class="dropdown-item delete-confirm"><i
                                    class="icon-file-minus"></i>
                                Delete
                                Product</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endif
        @endforeach
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