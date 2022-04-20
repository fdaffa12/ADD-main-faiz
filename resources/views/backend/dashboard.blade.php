<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RPP - Dashboard</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/darkview/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="assets/js/plugins/forms/"></script>
    <script src="{{ asset('assets/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/validation/validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/form_input_groups.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('JS')
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-xl navbar-light navbar-static px-0">
        <div class="d-flex flex-1 pl-3">
            <div class="navbar-brand wmin-0 mr-1">
                <a href="index.html" class="d-inline-block">
                    <img src="{{asset('assets/images/logo_text.png')}}" class="d-none d-sm-block d-sm-none" alt="">
                    <img src="{{asset('assets/images/logo_text.png')}}" class="d-sm-none" alt="">
                </a>
            </div>
            <ul class="navbar-nav navbar-nav-underline flex-row">
                @if (Auth::user()->is_admin == 1)
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <span class="d-none d-xl-block">Developer</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/developer')}}" class="dropdown-item">Manage
                            Developer</a>
                        <a href="{{url('admin/add-developer')}}" class="dropdown-item">Add
                            Developer</a>
                    </div>
                </li>
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <span class="d-none d-xl-block">Sec Developer</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/gallery')}}" class="dropdown-item">Manage Secondary Developer</a>
                        <a href="{{url('admin/add-gallery')}}" class="dropdown-item">Add
                            Secondary Developer</a>
                    </div>
                </li>
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <span class="d-none d-xl-block">Primary Developer</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/primary')}}" class="dropdown-item">Manage Primary Developer</a>
                        <a href="{{url('admin/add-primary')}}" class="dropdown-item">Add
                            Primary Developer</a>
                    </div>
                </li>
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <span class="d-none d-xl-block">Listing</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/listing')}}" class="dropdown-item">Manage Listing</a>
                        <a href="{{url('admin/add-listing')}}" class="dropdown-item">Add
                            Listing</a>
                    </div>
                </li>
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="{{url('admin/setting')}}"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100">
                        <span class="d-none d-xl-block">Setting</span>
                    </a>
                </li>
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="{{url('admin/publikasi')}}"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100">
                        <span class="d-none d-xl-block">Publikasi</span>
                    </a>
                </li>
                <!-- <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="{{url('admin/index-pages')}}"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100">
                        <span class="d-none d-xl-block">Pages</span>
                    </a>
                </li> -->
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <span class="d-none d-xl-block">Struktur</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/struktur')}}" class="dropdown-item">Manage Struktur Perusahaan</a>
                        <a href="{{url('admin/add-struktur')}}" class="dropdown-item">Add
                            Struktur Perusahaan</a>
                    </div>
                </li>
                @else
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <span class="d-none d-xl-block">Sec Developer</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/gallery')}}" class="dropdown-item">Manage Secondary Developer</a>
                        <a href="{{url('admin/add-gallery')}}" class="dropdown-item">Add
                            Secondary Developer</a>
                    </div>
                </li>
                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <span class="d-none d-xl-block">Listing</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/listing')}}" class="dropdown-item">Manage Listing</a>
                        <a href="{{url('admin/add-listing')}}" class="dropdown-item">Add
                            Listing</a>
                    </div>
                </li>
                @endif
            </ul>

        </div>

        <div class="d-flex flex-xl-1 justify-content-xl-end order-0 order-xl-1 pr-3">
            <ul class="navbar-nav navbar-nav-underline flex-row">

                <li class="nav-item nav-item-dropdown-xl dropdown dropdown-user h-100">
                    <a href="#"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100 dropdown-toggle"
                        data-toggle="dropdown">
                        <img src="{{asset('assets/images/placeholders/placeholder.jpg')}}"
                            class="rounded-circle mr-xl-2" height="38" alt="">
                        <span class="d-none d-xl-block">Fadlil Muhammad</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a href="{{url('admin/logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content container header-elements-md-inline">
                        <div class="d-flex">
                            <div class="page-title">
                                <h4 class="font-weight-semibold">Dashboard</h4>
                                <div class="text-muted">Welcome back, Fadlil!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content container pt-0">

                    <!-- Latest orders -->
                    <div class="card">
                        <div class="card-body">
                            @yield('dashcontent')
                        </div>

                    </div>
                    <!-- /latest orders -->

                    <!-- Facility modal -->

                    <!-- /Facility modal -->

                </div>
                <!-- /content area -->


                <!-- Footer -->
                <div class="navbar navbar-expand-lg navbar-light">
                    <div class="text-center d-lg-none w-100">
                        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                            data-target="#navbar-footer">
                            <i class="icon-unfold mr-2"></i>
                            Footer
                        </button>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-footer">
                        <span class="navbar-text">
                            &copy; 2020 - 2021. <a href="#">Rudi Prima Persada</a>
                        </span>
                    </div>
                </div>
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>