@extends('front.layouts')
@section('title') <title>Home - Add Property</title> @endsection
@section('home') active @endsection
@section('content')

<!--/ Carousel Star /-->
<section class="section-property section-t8">
    <div class="container">
        <div class="intro intro-carousel">
            <div id="carousel" class="owl-carousel owl-theme">
                @foreach($banners as $key => $banner)
                <div class="carousel-item-a">
                    <img src="{{asset($banner->image)}}" class="d-block w-100" alt="...">

                    <div class="intro-content display-table">
                        <div class="table-cell">
                            <div class="container">
                                <!-- <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Doral, Florida
                                        <br> 78345
                                    </p>
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">204 </span> Mount
                                        <br> Olive Road Two
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--/ Carousel end /-->



<!--/ Property Star /-->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Latest Properties</h2>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills pb-2">
            <li class="nav-item"><a href="#basic-pill1" class="nav-link active" data-toggle="tab">Primary House</a></li>
            <li class="nav-item"><a href="#basic-pill2" class="nav-link" data-toggle="tab">Secondary House</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="basic-pill1">
                <div id="property-carousel" class="owl-carousel owl-theme">
                    @foreach($primary as $post)
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{{$post->title}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">price | RP {{$post->harga}}</span>
                                        </div>
                                        <a href="{{url('dashboard-dev/detail/'.$post->id)}}" class="link-a">Click here
                                            to
                                            view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Buliding</h4>
                                                <span>{{$post->lb}}
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>{{$post->lt}}
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>{{$post->kt}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>{{$post->km}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="title-link">
                    <a href="{{url('dashboard/all-property')}}">All Property
                        <span class="ion-ios-arrow-forward"></span>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="basic-pill2">
                <div id="new-carousel" class="owl-carousel owl-theme">
                    @foreach($secondary as $post)
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-sec/detail/'.$post->id)}}">{{$post->title}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">price | RP {{$post->harga}}</span>
                                        </div>
                                        <a href="{{url('dashboard-sec/detail/'.$post->id)}}" class="link-a">Click here
                                            to
                                            view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Buliding</h4>
                                                <span>{{$post->lb}}
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>{{$post->lt}}
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>{{$post->kt}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>{{$post->km}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="title-link">
                    <a href="{{url('dashboard/all-secondary-property')}}">All Secondary Property
                        <span class="ion-ios-arrow-forward"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Property End /-->

<!--/ News Star /-->

<!--/ News End /-->

<!--/ Developer Star /-->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Our Developer</h2>
                    </div>
                    <div class="title-link">
                        <a href="{{url('dashboard-dev')}}">All Developer
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="popular-carousel" class="owl-carousel owl-theme">
            @foreach($data as $dt)
            <div class="carousel-item-c">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset($dt->gambar)}}" style="aspect-ratio: 4/3;" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                @if( $dt->status == 0 )
                                <a href="{{url('dashboard-dev/item/'.$dt->id)}}" class="category-b">Subsidi</a>
                                @else
                                <a href="{{url('dashboard-dev/item/'.$dt->id)}}" class="category-b">Komersil</a>
                                @endif
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="{{url('dashboard-dev/item/'.$dt->id)}}">{{$dt->nama_dev}}
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--/ Developer End /-->

@endsection