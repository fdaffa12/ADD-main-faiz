@extends('dashboard/dashboard')
@section('JS')
<script src="{{ asset('assets/js/plugins/media/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
@endsection
@section('dashcontent')

<!-- Media library -->
<div class="card-header">
    <h6 class="card-title">Media Library</h6>
</div>

<table class="table media-library">
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
            <th>Author</th>
            <th>Date</th>
            <th>File info</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">Ignorant saw her drawings</a></td>
            <td><a href="#">Eugene Kopyov</a></td>
            <td>Jun 10, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 215 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .jpg</li>
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
                            <a href="{{url('admin/gallery/image/delete/'.$item->id)}}"
                                onclick="return confirm('Are you sure?')" class="dropdown-item"><i class="icon-bin"></i>
                                Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">Case oh an that or away sigh</a></td>
            <td><a href="#">James Alexander</a></td>
            <td>Jun 9, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 636 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .png</li>
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
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">Acuteness you exquisite ourselves</a></td>
            <td><a href="#">Jeremy Victorino</a></td>
            <td>Jun 9, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 295 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .png</li>
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
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">Enquire ye without it garrets</a></td>
            <td><a href="#">Margo Baker</a></td>
            <td>Jun 8, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 593 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .png</li>
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
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">Interest received followed</a></td>
            <td><a href="#">Monica Smith</a></td>
            <td>Jun 8, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 993 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .jpg</li>
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
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">His exquisite sincerity</a></td>
            <td><a href="#">Bastian Miller</a></td>
            <td>Jun 9, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 472 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .jpg</li>
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
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">So we me unknown</a></td>
            <td><a href="#">Jordana Mills</a></td>
            <td>Jun 6, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 364 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .jpg</li>
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
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label p-0"></span>
                </label>
            </td>
            <td>
                <a href="assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
                    <img src="assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
                </a>
            </td>
            <td><a href="#">Sufficient impossible him may</a></td>
            <td><a href="#">Buzz Brenson</a></td>
            <td>May 29, 2015</td>
            <td>
                <ul class="list-unstyled mb-0">
                    <li><span class="font-weight-semibold">Size:</span> 643 Kb</li>
                    <li><span class="font-weight-semibold">Format:</span> .png</li>
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
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<!-- /media library -->
@endsection