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
                    <div class="title-link">
                        <a href="{{url('dashboard/all-property')}}">All Property
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
            @foreach($primary as $post)
            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt="" class="img-a img-fluid">
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
                                <a href="{{url('dashboard-dev/detail/'.$post->id)}}" class="link-a">Click here to view
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
    </div>
</section>
<!--/ Property End /-->

<!--/ News Star /-->
<section class="section-news section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Secondary Property</h2>
                    </div>
                    <div class="title-link">
                        <a href="{{url('dashboard/all-secondary-property')}}">All Secondary Property
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="new-carousel" class="owl-carousel owl-theme">
            @foreach($secondary as $post)
            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt="" class="img-a img-fluid">
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
                                <a href="{{url('dashboard-sec/detail/'.$post->id)}}" class="link-a">Click here to view
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
    </div>
</section>
<!--/ News End /-->

@endsection