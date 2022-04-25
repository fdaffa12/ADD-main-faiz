<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RPP - Beranda</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/lightview/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{$setting->image}}" type="image/x-icon" />

    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->


    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- /theme JS files -->

    <style>
    .hero {
        max-inline-size: 100%;
        block-size: auto;
        aspect-ratio: 2/1;
        object-fit: cover;
        object-position: top center;
    }
    </style>

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-xl navbar-dark navbar-static px-0 bg-primary">
        <div class="d-flex flex-1 pl-3">
            <div class="navbar-brand wmin-0 mr-1">
                <a href="{{url('/')}}" class="d-inline-block">
                    <img src="{{$setting->image}}" class="d-none d-sm-block d-sm-none" alt="" style="height: 2.025rem;">
                    <img src="{{$setting->image}}" class="d-sm-none" alt="" style="height: 2.025rem;">
                </a>
            </div>
        </div>

        <div
            class="d-flex w-100 w-xl-auto overflow-auto overflow-xl-visible scrollbar-hidden border-top border-top-xl-0 order-1 order-xl-0">
            <ul class="navbar-nav navbar-nav-underline flex-row text-nowrap mx-auto">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="navbar-nav-link active">
                        <i class="icon-home2 mr-2"></i>
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('dashboard-dev')}}" class="navbar-nav-link">
                        <i class="icon-city mr-2"></i>
                        Katalog Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{('/')}}" class="navbar-nav-link">
                        <i class="icon-cube3 mr-2"></i>
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/')}}" class="navbar-nav-link">
                        <i class="icon-notebook mr-2"></i>
                        Kontak
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-flex flex-xl-1 justify-content-xl-end order-0 order-xl-1 pr-3">

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
                        <div class="page-title">
                            <h4 class="font-weight-semibold">Home</h4>
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content container pt-0">
                    @foreach ($banners as $banner)
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- <div class="card">
                                <div class="embed-responsive embed-responsive-4by3"> -->
                            <!-- <iframe class="embed-responsive-item" src="{{asset($banner->image)}}"></iframe> -->
                            <img src="{{asset($banner->image)}}" class="hero" alt="">
                            <!-- </div>
                            </div> -->
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Selamat datang</h5>
                                    <p class="card-text">{{$banner->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Developer Highlight -->
                    <div class="mb-3">
                        <h6 class="mb-0 font-weight-semibold">
                            Developer Highlight
                        </h6>
                        <span class="text-muted d-block">Developer yang di highlight di menu utama</span>
                    </div>

                    <div class="row">
                        @foreach ($data as $dt)
                        <div class="col-lg-4">
                            <div class="card">
                                <a href="{{url('dashboard-dev/item/'.$dt->id)}}">
                                    <img class="hero" src="{{asset($dt->gambar)}}" alt=""></a>

                                <div class="card-body">
                                    <h5 class="card-title"><a
                                            href="{{url('dashboard-dev/item/'.$dt->id)}}">{{$dt->nama_dev}}</a></h5>
                                    <p class="card-text">{!! $dt->desc !!}</p>
                                </div>

                                <!-- <div class="card-footer d-flex justify-content-between">
									<span class="text-muted">Last updated 5 hours ago</span>
									<span class="d-inline-flex align-items-center">
										<i class="icon-star-full2 font-size-base text-warning ml-1"></i>
										<i class="icon-star-full2 font-size-base text-warning ml-1"></i>
										<i class="icon-star-full2 font-size-base text-warning ml-1"></i>
										<i class="icon-star-full2 font-size-base text-warning ml-1"></i>
										<i class="icon-star-empty3 font-size-base text-warning ml-1"></i>
										<span class="text-muted ml-2">(63)</span>
									</span>
								</div> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- /Developer Highlight -->

                    <!-- Project Highlight -->
                    <div class="mb-3">
                        <h6 class="mb-0 font-weight-semibold">
                            Project Highlight
                        </h6>
                        <span class="text-muted d-block">Project yang di highlight di menu utama</span>
                    </div>

                    @foreach ($secondary as $key => $post)
                    @if ($key % 2 === 0)
                    <div class="card card-body">
                        <div
                            class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-lg-3 mb-3 mb-lg-0">
                                <a href="{{url('dashboard-sec/detail/'.$post->id)}}" data-popup="lightbox">
                                    <img src="{{asset($post->image)}}" width="180" height="135" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <h6 class="media-title font-weight-semibold">
                                    <a href="{{url('dashboard-sec/detail/'.$post->id)}}">{{$post->title}}</a>
                                </h6>

                                <h4 style="color:orange;">Harga Rp. {{$post->harga}}</h4>
                                <p>Luas Bangunan : {{ $post->lb }}</p>
                                <p>Luas Tanah : {{ $post->lt }}</p>
                                <p>Fasilitas : {{ $post->fasilitas }}</p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="card card-body">
                        <div
                            class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="media-body">
                                <h6 class="media-title font-weight-semibold">
                                    <a href="{{url('dashboard-sec/detail/'.$post->id)}}">{{$post->title}}</a>
                                </h6>

                                <h4 style="color:orange;">Harga Rp. {{$post->harga}}</h4>
                                <p>Luas Bangunan : {{ $post->lb }}</p>
                                <p>Luas Tanah : {{ $post->lt }}</p>
                                <p>Fasilitas : {{ $post->fasilitas }}</p>
                            </div>

                            <div class="ml-lg-3 mb-3 mb-lg-0">
                                <a href="{{url('dashboard-sec/detail/'.$post->id)}}" data-popup="lightbox">
                                    <img src="{{asset($post->image)}}" width="180" height="135" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- <div class="card card-body">
                        <div
                            class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-lg-3 mb-3 mb-lg-0">
                                <a href="assets/images/placeholders/cover.jpg" data-popup="lightbox">
                                    <img src="assets/images/placeholders/cover.jpg" width="180" height="135" alt="">
                                </a>
                            </div>

                            <div class="media-body">
                                <h6 class="media-title font-weight-semibold">
                                    <a href="#">Project 3</a>
                                </h6>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- /Project Highlight -->

                </div>
                <!-- /content area -->


                <!-- Footer -->
                <div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
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