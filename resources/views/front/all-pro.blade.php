@extends('front.layouts')
@section('title') <title>Primary Property - Add Property</title> @endsection
@section('property') active @endsection
@section('allprim') active @endsection
@section('content')


<section class="intro-double sticky-top"
    style="background-color: #ffff; box-shadow: 1px 2px 15px rgb(100 100 100 / 30%);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-pills p-2">
                        <li class="nav-item"><a href="#basic-pill1" class="nav-link active" data-toggle="tab">Semua
                                Property</a>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Harga</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a href="#basic-pill1" class="dropdown-item" data-toggle="tab">Semua Property</a> -->
                                <a href="#basic-pill2" class="dropdown-item" data-toggle="tab">0-500rb</a>
                                <a href="#basic-pill3" class="dropdown-item" data-toggle="tab">500rb-1jt</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tipe Bangunan</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a href="#basic-pill1" class="dropdown-item" data-toggle="tab">Semua Property</a> -->
                                <a href="#type-pill1" class="dropdown-item" data-toggle="tab">Rumah</a>
                                <a href="#type-pill2" class="dropdown-item" data-toggle="tab">Ruko</a>
                                <a href="#type-pill3" class="dropdown-item" data-toggle="tab">Apartemen</a>
                                <a href="#type-pill4" class="dropdown-item" data-toggle="tab">Kantor</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ketegori</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a href="#basic-pill1" class="dropdown-item" data-toggle="tab">Semua Property</a> -->
                                <a href="#kategori-pill1" class="dropdown-item" data-toggle="tab">Baru</a>
                                <a href="#kategori-pill2" class="dropdown-item" data-toggle="tab">Subsidi</a>
                                <a href="#kategori-pill3" class="dropdown-item" data-toggle="tab">Bekas</a>
                            </div>
                        </li>
                    </ul>
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
                @foreach($highlight as $post)
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

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-a">Properti Dari Kami</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Grid Star /-->
<section class="news-grid grid">
    <div class="container">
        <div class="tab-content pb-2">
            <div class="tab-pane fade show active" id="basic-pill1">
                <div class="row">
                    @foreach($primary as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <div class="card-category-a">
                                            @if( $post->kategori == 'bekas' )
                                            <a href="#" class="category-a">Secondary</a>
                                            @else
                                            <a href="#" class="category-ab">Baru</a>
                                            @endif
                                        </div>
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $primary->appends(['primary' => $primary->currentPage()])->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="basic-pill2">
                <div class="row">
                    @foreach($nolsdlimaratus as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $nolsdlimaratus->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="basic-pill3">
                <div class="row">
                    @foreach($limasdsatujuta as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $limasdsatujuta->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="type-pill1">
                <div class="row">
                    @foreach($rumah as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $rumah->appends(['rumah' => $rumah->currentPage()])->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="type-pill2">
                <div class="row">
                    @foreach($ruko as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $ruko->appends(['ruko' => $ruko->currentPage()])->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kategori-pill1">
                <div class="row">
                    @foreach($primary as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $primary->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kategori-pill2">
                <div class="row">
                    @foreach($rumahsubsidi as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $rumahsubsidi->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kategori-pill3">
                <div class="row">
                    @foreach($category as $post)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3;" alt=""
                                    class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                Str::limit($post->title,25, '...') !!}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            @if( $post->kategori == 'bekas' )
                                            <span class="price-a">Harga | @currency($post->harga)</span>
                                            @else
                                            <span class="price-a">cicilan | @currency($post->harga)</span>
                                            @endif
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
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $category->appends(['category' => $category->currentPage()])->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ News Grid End /-->

<script>
$('#myDropdown .dropdown-menu').on({
    "click": function(e) {
        e.stopPropagation();
    }
});
$('.closer').on('click', function() {
    $('.btn-group').removeClass('open');
});
</script>
@endsection