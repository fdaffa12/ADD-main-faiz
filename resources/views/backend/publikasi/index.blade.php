@extends('backend/dashboard')
@section('')
@endsection
@section('dashcontent')
<ul class="nav nav-tabs nav-tabs-solid rounded">
    <li class="nav-item"><a href="{{url('admin/publikasi')}}" class="nav-link rounded-left active">Manage Publikasi</a>
    </li>
    <li class="nav-item"><a href="{{url('admin/add-publikasi')}}" class="nav-link">Add Publikasi</a>
    <li class="nav-item"><a href="{{url('admin/manage-post')}}" class="nav-link">Manage Post</a>
    <li class="nav-item"><a href="{{url('admin/add-post')}}" class="nav-link">Add Post</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" id="solid-rounded-tab1">
        <div class="table-responsive">
            <table class="table table-hover" id="table-datatables">
                <thead>
                    <tr>
                        <th style="width: 550px">Nama</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 20px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publikasi as $page)
                    <tr>
                        <td>{{ $page->nama }}</td>
                        <td>
                            @if( $page->status == 0 )
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
                                        <a href="#" class="dropdown-item" id="export_button"><i
                                                class="icon-file-picture"></i> Manage
                                            Media</a>
                                        <a href="{{url('admin/edit-publikasi/'.$page->id)}}" class="dropdown-item"><i
                                                class="icon-file-text2"></i> Edit
                                            Detail</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{url('admin/delete-publikasi/'.$page->id)}}"
                                            class="dropdown-item delete-confirm"><i class="icon-file-minus"></i> Delete
                                            Publikasi</a>
                                        @if( $page->status == 0 )
                                        <a href="{{ url('admin/publish-publikasi/'.$page->id) }}"
                                            class="dropdown-item"><i class="icon-eye"></i>Publish</a>
                                        @else
                                        <a href="{{ url('admin/draft-publikasi/'.$page->id) }}" class="dropdown-item"><i
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

<script>
function html_table_to_excel(type) {
    var data = document.getElementById('publikasi_data');

    var file = XLSX.utils.table_to_book(data, {
        sheet: "sheet1"
    });

    XLSX.write(file, {
        bookType: type,
        bookSST: true,
        type: 'base64'
    });

    XLSX.writeFile(file, 'file.' + type);
}

const export_button = document.getElementById('export_button');

export_button.addEventListener('click', () => {
    html_table_to_excel('xlsx');
});
</script>
@endsection