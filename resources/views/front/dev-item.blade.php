@extends('front.layouts')
@section('title') <title>{{$data->nama_dev}} - Add Property</title> @endsection
@section('developer') active @endsection
@section('alldev') active @endsection
@section('content')

<section class="intro-single" style="padding-top: 8rem">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">{{$data->nama_dev}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-grid grid">
    <div class="container">
        <div class="row">
            @foreach($categoryitems as $post)
            <div class="col-md-4">
                <div class="card" style="margin-bottom: 30px;">
                    <div class="card-box-a card-shadow" style="margin-bottom:-10px;">
                        <div class="img-box-a">
                            <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3; border-radius: 0.25rem" alt=""
                                class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    @if( $post->kategori == 'baru' )
                                    <a href="#" class="category-b">Baru</a>
                                    @else
                                    <a href="#" class="category-b">Bekas</a>
                                    @endif
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-3">
                                        <a href="{{url('detail/'.$post->title)}}">Selengkapnya
                                            <span class="ion-ios-arrow-forward"></span></a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding:1.5rem;">
                        <div class="price-box d-flex pb-2" style="margin-top:1px">
                            <span class="price-z">Cicilan | @currency($post->harga)</span>
                        </div>
                        <h4 class="card-title-a ml-3" style="font-size: 20px; margin-bottom: -3px; margin-top: -3px;">
                            <a href="{{url('detail/'.$post->title)}}">{!!
                                Str::limit($post->title,25, '...') !!}</a>
                        </h4>
                        <ul class="card-info d-flex justify-content-around"
                            style="margin-top:-5px; margin-bottom:-19px">
                            <li>
                                <h4 class="card-info-title" style="margin-bottom: 3px;">Buliding</h4>
                                <span class="color-x">{{$post->lb}}<sup>2</sup>
                                </span>
                            </li>
                            <li>
                                <h4 class="card-info-title" style="margin-bottom: 3px;">Area</h4>
                                <span>{{$post->lt}}<sup>2</sup>
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
        <div class="row">
            <div class="col-sm-12">
                <nav class="pagination-a">
                    {{ $categoryitems->links() }}
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection