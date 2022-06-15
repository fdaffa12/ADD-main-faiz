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
            @foreach($categoryitems as $category)
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset($category->image)}}" style="aspect-ratio: 4/3;" alt=""
                            class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                @if( $category->status == 0 )
                                <a href="{{url('dashboard-dev/detail/'.$category->id)}}" class="category-b">Subsidi</a>
                                @else
                                <a href="{{url('dashboard-dev/detail/'.$category->id)}}" class="category-b">Komersil</a>
                                @endif
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="{{url('dashboard-dev/detail/'.$category->id)}}">{{$category->title}}
                                    </a>
                                </h2>
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
                    {{ $categoryitems->links() }}
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection