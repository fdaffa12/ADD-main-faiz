@extends('front.layouts')
@section('title') <title>Secondary Property - Add Property</title> @endsection
@section('property') active @endsection
@section('allsec') active @endsection
@section('content')
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Our Amazing Property</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Grid Star /-->
<section class="news-grid grid">
    <div class="container">
        <div class="row">
            @foreach($category as $post)
            <div class="col-md-4">
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
                                <a href="{{url('dashboard-sec/detail/'.$post->id)}}" class="link-a">Click here to
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
                    {{ $category->links() }}
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ News Grid End /-->
@endsection