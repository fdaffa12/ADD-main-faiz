@extends('backend/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/media/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
@endsection
@section('dashcontent')

<!-- Media library -->
<div class="card-header">
    <h6 class="card-title">Media Library</h6>
    <button type="button" class="btn btn-primary mb-2 mt-2" data-toggle="modal" data-target="#create">
        Add New Image
    </button>
</div>

<table class="table datatable-responsive">
    <thead>
        <tr>
            <th>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </th>
            <th>Preview</th>
            <th>Name</th>
            <th>Date</th>
            <th>File info</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($primaryitems as $item)
        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="{{URL::asset('uploads/gallery/'.$item->cover_image)}}" alt="" class="img-preview rounded">
                </a>
            </td>
            <td>{{$item->primary->title}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">File Name:</span>{{$item->cover_image}}</li>
                </ul>
            </td>
            <td class="text-center">
                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                            <i class="icon-menu9"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
                            <a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
                            <a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{url('admin/primary/image/delete/'.$item->id)}}"
                                onclick="return confirm('Are you sure?')" class="dropdown-item"><i class="icon-bin"></i>
                                Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Create Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create new Primary" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create">Add Primary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('primary.image.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <input type="hidden" name='id' value="{{$id}}">
                    @include('backend.primary.view.form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /media library -->
@endsection

<script src="{{asset('js/gallery/images/scripts.js')}}"></script>