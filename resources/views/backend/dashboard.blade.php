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
    <link rel="shortcut icon" href="{{asset('assets/images/logobaru.png')}}" type="image/x-icon" />

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
    <!-- datatable -->
    <script src="{{ asset('assets/js/demo_pages/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/datatables_responsive.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/footable.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/table_responsive.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/extra_sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/sweet_alert.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/vfs_fonts.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo_pages/datatables_extension_buttons_init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>



    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

    @yield('JS')
    <!-- /theme JS files -->

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{url('admin/home')}}">
            <img src="{{asset('assets/images/logobaru.png')}}" class="d-none d-sm-block d-sm-none" alt=""
                style="height: 2.125rem;">
            <img src="{{asset('assets/images/logobaru.png')}}" class="d-sm-none" alt="" style="height: 2.125rem;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto">
                @if (Auth::user()->is_admin == 1)
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sec Developer
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/gallery')}}" class="dropdown-item">Manage Secondary Developer</a>
                        <a href="{{url('admin/add-gallery')}}" class="dropdown-item">Add
                            Secondary Developer</a>
                        <a href="{{url('admin/listing')}}" class="dropdown-item">Manage Listing</a>
                        <a href="{{url('admin/add-listing')}}" class="dropdown-item">Add
                            Listing</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Primary Developer
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/primary')}}" class="dropdown-item">Manage Primary Developer</a>
                        <a href="{{url('admin/add-primary')}}" class="dropdown-item">Add
                            Primary Developer</a>
                        <a href="{{url('admin/developer')}}" class="dropdown-item">Manage
                            Developer</a>
                        <a href="{{url('admin/add-developer')}}" class="dropdown-item">Add
                            Developer</a>
                        <a href="{{url('admin/primary-full')}}" class="dropdown-item">Add
                            Developer</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/setting')}}" class="nav-link">
                        Setting
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/publikasi')}}" class="nav-link">
                        Publikasi
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="{{url('admin/index-pages')}}"
                        class="navbar-nav-link navbar-nav-link-toggler d-flex align-items-center h-100">
                        Pages
                    </a>
                </li> -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Struktur
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/struktur')}}" class="dropdown-item">Manage Struktur Perusahaan</a>
                        <a href="{{url('admin/add-struktur')}}" class="dropdown-item">Add
                            Struktur Perusahaan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Prospek
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/prospek')}}" class="dropdown-item">Manage Prospek</a>
                        <a href="{{url('admin/add-prospek')}}" class="dropdown-item">Add
                            Prospek</a>
                    </div>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sec Developer
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/gallery')}}" class="dropdown-item">Manage Secondary Developer</a>
                        <a href="{{url('admin/add-gallery')}}" class="dropdown-item">Add
                            Secondary Developer</a>
                        <a href="{{url('admin/listing')}}" class="dropdown-item">Manage Listing</a>
                        <a href="{{url('admin/add-listing')}}" class="dropdown-item">Add
                            Listing</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Prospek
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{url('admin/prospek')}}" class="dropdown-item">Manage Prospek</a>
                        <a href="{{url('admin/add-prospek')}}" class="dropdown-item">Add
                            Prospek</a>
                    </div>
                </li>
                @endif
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a href="{{url('admin/logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>




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

</body>

</html>