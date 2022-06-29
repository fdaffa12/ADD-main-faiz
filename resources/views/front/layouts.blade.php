<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('uploads/addlog.png')}}" type="image/x-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('frontend/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">


    <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form action="{{ url('search-catalog')}}" method="GET">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label for="Type">Nama Perumahan</label>
                            @if( request()->input('search') == '')
                            <input type="text" class="form-control form-control-lg form-control-a" name="search"
                                placeholder="Search">
                            @else
                            <input type="text" class="form-control form-control-lg form-control-a" name="search"
                                value="{{ request()->input('search') }}" placeholder="Search">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">RP</div>
                            </div>
                            <input type="number" class="form-control" id="inlineFormInputGroup" name="min_price"
                                placeholder="Minimal" value="{{ request()->input('min_price') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">RP</div>
                            </div>
                            <input type="number" class="form-control" id="inlineFormInputGroup" name="max_price"
                                placeholder="Maximal" value="{{ request()->input('max_price') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bedrooms">Kategori</label>
                            @if ( request()->input('kategori') == '')
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="" checked>
                                <label class="form-check-label" style="white-space: nowrap;">
                                    Semua Kategori
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="baru">
                                <label class="form-check-label">
                                    Baru
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="bekas">
                                <label class="form-check-label">
                                    Seken
                                </label>
                            </div>
                            @elseif ( request()->input('kategori') == 'baru')
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="">
                                <label class="form-check-label" style="white-space: nowrap;">
                                    Semua Kategori
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="baru" checked>
                                <label class="form-check-label">
                                    Baru
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="bekas">
                                <label class="form-check-label">
                                    Seken
                                </label>
                            </div>
                            @elseif ( request()->input('kategori') == 'bekas')
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="">
                                <label class="form-check-label" style="white-space: nowrap;">
                                    Semua Kategori
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="baru">
                                <label class="form-check-label">
                                    Baru
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kategori" value="bekas" checked>
                                <label class="form-check-label">
                                    Seken
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="garages">Jenis Bangunan</label>
                            @if( request()->input('keyword') == '')
                            <div class="form-check" style="width: 210px;">
                                <input class="form-check-input" type="radio" name="keyword" value="" checked>
                                <label class="form-check-label" style="white-space: nowrap;">
                                    Semua Jenis Bangunan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keyword" value="rumah">
                                <label class="form-check-label">
                                    Rumah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keyword" value="ruko">
                                <label class="form-check-label">
                                    Ruko
                                </label>
                            </div>
                            @elseif ( request()->input('keyword') == 'rumah')
                            <div class="form-check" style="width: 210px;">
                                <input class="form-check-input" type="radio" name="keyword" value="" checked>
                                <label class="form-check-label" style="white-space: nowrap;">
                                    Semua Jenis Bangunan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keyword" value="rumah" checked>
                                <label class="form-check-label">
                                    Rumah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keyword" value="ruko">
                                <label class="form-check-label">
                                    Ruko
                                </label>
                            </div>
                            @elseif ( request()->input('keyword') == 'ruko')
                            <div class="form-check" style="width: 210px;">
                                <input class="form-check-input" type="radio" name="keyword" value="" checked>
                                <label class="form-check-label" style="white-space: nowrap;">
                                    Semua Jenis Bangunan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keyword" value="rumah">
                                <label class="form-check-label">
                                    Rumah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="keyword" value="ruko" checked>
                                <label class="form-check-label">
                                    Ruko
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search Property</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset($setting->image)}}" class="d-none d-sm-block d-sm-none" alt=""
                    style="height:50px; margin-top:-25px; margin-bottom:-50px;">
                <img src="{{asset($setting->image)}}" class="d-sm-none" alt=""
                    style="height:35px; margin-top:-40px; margin-bottom:-40px;">
            </a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @yield('property')" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Property
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item @yield('allprim')" href="{{url('dashboard/all-property')}}">All
                                Property</a>
                            <a class="dropdown-item @yield('allsec')"
                                href="{{url('dashboard/all-secondary-property')}}">All
                                Secondary Property</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('dashboard-dev')}}">Developer</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
        </div>
    </nav>
    <!--/ Nav End /-->

    @yield('content')
    <!--/ footer Star /-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/addproperty.id">
                                    <i class="fa fa-facebook" aria-hidden="true"
                                        style="background: #103681; border-radius: 5px; padding: 0.4rem; color: #ffff;"></i>
                                    ADD Property
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://wa.me/+628111160311">
                                    <i class="fa fa-whatsapp" aria-hidden="true"
                                        style="background: #103681; border-radius: 5px; padding: 0.4rem; color: #ffff;"></i>
                                    0811-1160-311
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/add.property/">
                                    <i class="fa fa-instagram" aria-hidden="true"
                                        style="background: #103681; border-radius: 5px; padding: 0.4rem; color: #ffff;"></i>
                                    @add.property
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a" style="margin-bottom: 0;">
                            &copy; Copyright
                            <span class="color-a">Add Property</span> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{asset('frontend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('frontend/lib/popper/popper.min.js')}}"></script>
    <script src="{{asset('frontend/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/lib/scrollreveal/scrollreveal.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>