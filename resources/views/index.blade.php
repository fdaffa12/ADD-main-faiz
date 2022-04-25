<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RPP - @yield('pgtitle')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ui/slinky.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ui/prism.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-xl navbar-dark bg-primary-800   navbar-component rounded mb-0">
        <div class="navbar-brand wmin-0 mr-5">
            <a href="{{url('/')}}" class="d-inline-block">
                <img src="{{$setting->image}}" class="d-none d-sm-block d-sm-none" alt="" style="height: 2.025rem;">
                <img src="{{$setting->image}}" class="d-sm-none" alt="" style="height: 2.025rem;">
            </a>
        </div>

        <div class="d-xl-none">
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-id">
                <i class="icon-menu"></i>
            </button>
        </div>

        @yield('navbar')
    </div>
    <!-- /main navbar -->

    <!-- Page header -->
    <div class="page-header page-header-dark" style="border: 1px solid #ddd; border-bottom: 0;">
        <div class="page-header-content bg-primary header-elements-inline">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-left52 mr-2"></i>
                    <span class="font-weight-semibold">@yield('title')</span> @yield('title2')
                    <small class="d-block opacity-75">@yield('subtitle')</small>
                </h5>
            </div>
            @yield('search')
        </div>


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Beranda</a>
                    @yield('navigation')
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

    </div>
    <!-- /page header -->


    <!-- Page content -->
    <div class="page-content pt-0">

        <!-- Main sidebar -->
        @yield('content')
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Footer -->
    <div class="navbar navbar-expand-lg navbar-light">

        <div class="" id="navbar-footer">
            <span class="navbar-text">
                &copy; 2020. <a href="#">Rudi Prima Persada</a>
            </span>
        </div>
    </div>
    <!-- /footer -->

</body>

</html>