@extends('index')
@section('')
@endsection
@section('pgtitle','Katalog Produk')
@section('title','Katalog Produk')
@section('navbar')
<div class="navbar-collapse collapse" id="navbar-id">
    <ul class="navbar-nav ml-xl-auto">
        <li class="nav-item">
            <a href="{{url('/')}}" class="navbar-nav-link">
                <i class="icon-home2 mr-2"></i>
                Beranda
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('dashboard-dev')}}" class="navbar-nav-link @yield('dev')">
                <i class="icon-city mr-2"></i>
                Katalog Produk
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('dashboard-sec')}}" class="navbar-nav-link @yield('sec')">
                <i class="icon-office mr-2"></i>
                Katalog Secondary
            </a>
        </li>

        <!-- <li class="nav-item">
            <a href="{{url('/')}}" class="navbar-nav-link">
                <i class="icon-cube3 mr-2"></i>
                Profil
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('/')}}" class="navbar-nav-link">
                <i class="icon-notebook mr-2"></i>
                Kontak
            </a>
        </li> -->
    </ul>
</div>

@endsection
@section('search')
<div class="header-elements d-none py-0 mb-3 mb-lg-0">
    <form action="{{url('search-catalog')}}" method="get">
        <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="text" id="query" name="query" value="{{ request()->input('query') }}"
                class="form-control bg-light-100 text-white placeholder-light border-transparent rounded-pill shadow-none wmin-lg-300"
                placeholder="Search">
            <div class="form-control-feedback text-white">
                <i class="icon-search4 font-size-sm opacity-50"></i>
            </div>
        </div>
    </form>
</div>
@endsection
@section('breadcrumb')
<div class="breadcrumb-line breadcrumb-line-light container-boxed">
    <div class="d-flex ">
        <div class="breadcrumb">
            <a href="{{url('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Beranda</a>
            @yield('navigation')
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg align-self-start">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Header -->
        <div class="sidebar-section sidebar-header">
            <div class="sidebar-section-body d-flex align-items-center justify-content-center pb-0">
                <h6 class="sidebar-resize-hide flex-1 mb-0">Navigation</h6>
                <div>
                    <button type="button"
                        class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="icon-transmission"></i>
                    </button>

                    <button type="button"
                        class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                        <i class="icon-cross2"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                            <!-- <span class="d-block font-weight-normal opacity-50">No active orders</span> -->
                        </span>
                    </a>
                </li>

                <!-- /main -->

                <!-- Komersil -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Komersil</div> <i class="icon-menu"
                        title="Layout options"></i>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link"><i class="icon-radio-unchecked"></i>
                        <span>Placeholder Hot</span>
                        <span class="badge badge-danger align-self-center ml-auto">HOT</span>
                    </a>
                </li> -->
                @foreach($developer as $dev)
                <li class="nav-item nav-item">
                    <a href="{{url('dashboard-dev/item/'.$dev->id)}}" class=" nav-link"><i
                            class="icon-radio-unchecked"></i> <span>{{$dev->nama_dev}}</span></a>
                </li>
                @endforeach
                <!-- <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-radio-unchecked"></i> <span>Rolling
                            Hills</span></a>
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
                <!-- /Komersil -->

                <!-- Subsidi -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Subsidi</div> <i class="icon-menu"
                        title="Layout options"></i>
                </li>
                @foreach($subdeveloper as $dev)
                <li class="nav-item nav-item">
                    <a href="{{url('dashboard-dev/item/'.$dev->id)}}" class=" nav-link"><i
                            class="icon-radio-unchecked"></i> <span>{{$dev->nama_dev}}</span></a>
                </li>
                @endforeach


                <!-- secondary -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Rumah Secondary</div> <i class="icon-menu"
                        title="Layout options"></i>
                </li>
                <li class="nav-item nav-item">
                    <a href="{{url('dashboard-sec')}}" class=" nav-link"><i class="icon-radio-unchecked"></i>
                        <span>Lihat Semua Rumah
                            Secondary</span></a>
                </li>
                <!-- <li class="nav-item"><a href="#" class="nav-link"><i class="icon-radio-unchecked"></i>
                        <span>Kurnia Puri Harmoni</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-radio-unchecked"></i>
                        <span>Griya Indah Cikampek</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-radio-unchecked"></i>
                        <span>Najwa Residence</span></a></li> -->
                <!-- /Subsidi -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->


<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">

        <!-- Info alert -->
        @yield('catacont')
        <!-- /content cards -->

    </div>
    <!-- /content area -->

</div>
@endsection