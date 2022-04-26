<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RPP - Catalog</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <link rel="shortcut icon" href="{{asset($setting->image)}}" type="image/x-icon" />

    <!-- Theme JS files -->


    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-lg navbar-dark bg-primary-800 navbar-static sticky-top shadow-none px-lg-0">
        <div class="d-flex flex-1 flex-wrap container-boxed">
            <div class="navbar-brand wmin-0 mr-lg-5 order-1 order-lg-0">
                <a href="{{url('/')}}" class="d-inline-block">
                    <img src="{{asset($setting->image)}}" class="d-none d-sm-block d-sm-none" alt=""
                        style="height:50px; margin-top:-15px; margin-bottom:-50px;">
                    <img src="{{asset($setting->image)}}" class="d-sm-none" alt=""
                        style="height:45px; margin-top:-25px; margin-bottom:-40px;">
                </a>
            </div>

            <div class="d-flex flex-1 order-0 order-lg-1">

                <button type="button" class="navbar-toggler sidebar-mobile-main-toggle">
                    <i class="icon-transmission"></i>
                </button>
            </div>
            <div class="d-flex justify-content-end flex-1 order-2 order-lg-2">
                <div class="d-xl-none">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-id">
                        <i class="icon-paragraph-justify3"></i>
                    </button>
                </div>
            </div>

            @yield('navbar')

        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page header -->
    <div class="page-header page-header-dark page-header-static bg-primary-700">
        <div class="page-header-content container-boxed header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Katalog</span> - Developer
                </h4>
                <a href="#" class="header-elements-toggle text-white d-lg-none"><i class="icon-search4"></i></a>
            </div>

            @yield('search')
        </div>
        @yield('breadcrumb')
    </div>
    <!-- /page header -->

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @yield('content')
        <!-- /main content -->

    </div>
    <!-- /page content -->
</body>

</html>