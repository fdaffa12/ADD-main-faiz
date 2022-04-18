@extends('index')
@section('')
@endsection
@section('pgtitle','Katalog Developer')
@section('title','Katalog Developer')
@section('navbar')
<div class="navbar-collapse collapse" id="navbar-id">
    <ul class="navbar-nav ml-xl-auto">
        <li class="nav-item">
            <a href="{{'/'}}" class="navbar-nav-link">
                <i class="icon-home2 mr-2"></i>
                Beranda
            </a>
        </li>

        <li class="nav-item">
            <a href="{{'dashboard-dev'}}" class="navbar-nav-link active">
                <i class="icon-city mr-2"></i>
                Katalog Produk
            </a>
        </li>

        <li class="nav-item">
            <a href="{{'/'}}" class="navbar-nav-link">
                <i class="icon-cube3 mr-2"></i>
                Profil
            </a>
        </li>

        <li class="nav-item">
            <a href="{{'/'}}" class="navbar-nav-link">
                <i class="icon-notebook mr-2"></i>
                Kontak
            </a>
        </li>
    </ul>
</div>
@endsection
@section('search')
<div class="header-elements d-none bg-transparent py-0 border-0 mb-3 mb-md-0">
    <form action="#">
        <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="search" class="form-control wmin-md-250" placeholder="Search">
            <div class="form-control-feedback">
                <i class="icon-search4 font-size-sm opacity-50"></i>
            </div>
        </div>
    </form>
</div>
@endsection
@section('content')
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">
    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Main sidebar</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">
        <div class="card card-sidebar-mobile">

            <!-- Header -->
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Navigation</h6>
            </div>

            <!-- Main navigation -->
            <div class="card-body p-0">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item">
                        <a href="{{'/'}}" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
                                Dashboard
                                <!-- <span class="d-block font-weight-normal opacity-50">No active orders</span> -->
                            </span>
                        </a>
                    </li>
                    <!-- /main -->

                    <!-- Layout -->
                    <li class="nav-item-header">
                        <div class="text-uppercase font-size-xs line-height-xs">Perumahan</div> <i class="icon-menu"
                            title="Layout options"></i>
                    </li>
                    @foreach($developer as $dev)
                    <li class="nav-item"><a href="{{url('dashboard-dev/item/'.$dev->id)}}" class="nav-link"><i
                                class="icon-radio-unchecked"></i> <span>{{$dev->nama_dev}}</span></a></li>
                    @endforeach
                    <!-- <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-radio-unchecked"></i> <span>Rolling Hills</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Navbars">
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Tipe 1</a>
                                <ul class="nav nav-group-sub">
                                    <li class="nav-item"><a href="#" class="nav-link">Tipe 1a</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Tipe 1b</a></li>
                                </ul>
                            </li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item"><a href="#" class="nav-link">Tipe 2</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Tipe 3</a></li>
                        </ul>
                    </li> -->
                    <!-- /layout -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->


<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <!-- Sidebars overview -->
        @yield('catacont')
        <!-- /sidebars overview -->

    </div>
    <!-- /content area -->

</div>
@endsection