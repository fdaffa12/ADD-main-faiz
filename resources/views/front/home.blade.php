@extends('front.layouts')
@section('title') <title>Home - Add Property</title> @endsection
@section('home') active @endsection
@section('content')

<!--/ Carousel Star /-->
<section class="section-property section-t9">
    <div class="container">
        @foreach ($banners as $key => $banner)
        <img class="img-fluid" src="{{asset($banner->image)}}">
        @endforeach
    </div>
</section>
<!--/ Carousel end /-->

<section class="property-single section-t7 nav-arrow-b">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-k">Hot Promo Dari Add Property</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="property-single-carousel" class="owl-carousel owl-arrow owl-theme gallery-property">
                    @foreach($iklan as $dt)
                    <div class="carousel-item-b">
                        <img src="{{asset($dt->image)}}" alt="" class="img-a img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ Property Star /-->
<section class="section-property section-t6">
    <div class="color-z">
        <div class="container color-z" style="padding-top: 20px; padding-bottom:20px">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between pt-2">
                        <div class="title-box">
                            <h2 class="title-a" style="color: #ffff;">Perumahan Terlaris</h2>
                        </div>
                        <div class="title-link-z">
                            <a href="{{url('dashboard/all-property')}}">Perumahan Terlaris Lainnya
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                @foreach($primary as $post)
                <div class="carousel-item-b">
                    <div class="cards">
                        <div class="card-box-a card-shadow" style="margin-bottom:-10px;">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3; border-radius: 0.25rem"
                                    alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-title-b">
                                        <h2 class="title-3">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">Selengkapnya
                                                <span class="ion-ios-arrow-forward"></span></a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="padding:1rem;">
                            <div class="price-box d-flex pb-2" style="margin-top:1px">
                                <span class="price-z">Cicilan | @currency($post->harga)</span>
                            </div>
                            <h4 class="card-title-a ml-3"
                                style="font-size: 20px; margin-bottom: -3px; margin-top: -3px;">
                                <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                    Str::limit($post->title,25, '...') !!}</a>
                            </h4>
                            <ul class="card-info d-flex justify-content-around"
                                style="margin-top:-5px; margin-bottom:-19px">
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Buliding</h4>
                                    <span class="color-x">{{$post->lb}}
                                    </span>
                                </li>
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Area</h4>
                                    <span>{{$post->lt}}
                                    </span>
                                </li>
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Beds</h4>
                                    <span>{{$post->kt}}</span>
                                </li>
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Baths</h4>
                                    <span>{{$post->km}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--/ Property End /-->

<!--/ Developer Star /-->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
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