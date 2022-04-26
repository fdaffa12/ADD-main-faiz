@extends('catalog')
@section('')
@endsection
@section('pgtitle','Developer Item')
@section('title2', '- Developer Item')
@section('navigation')
<a href="{{url('dashboard-dev')}}" class="breadcrumb-item">Katalog Developer</a>
<span class="breadcrumb-item active">result(s) for
    '{{ request()->input('query') }}'</span>
@endsection
@section('catacont')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">result(s) for '{{ request()->input('query') }}'</h5>
        <div class="header-elements">
        </div>
    </div>
    @foreach($categoryitems as $cat)
    <div class="card-body">
        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
            <div class="mr-lg-3 mb-3 mb-lg-0">
                <a href="{{url('dashboard-dev/detail/'.$cat->id)}}" data-popup="lightbox">
                    <img src="{{asset($cat->image)}}" width="180" height="135" alt="">
                </a>
            </div>

            <div class="media-body">
                <h6 class="media-title font-weight-semibold">
                    <a href="#">{{$cat->title}}</a>
                </h6>

                <h4 style="color:orange;">Harga Rp. {{$cat->harga}}</h4>
                <p>Luas Bangunan : {{ $cat->lb }}</p>
                <p>Luas Tanah : {{ $cat->lt }}</p>
                <p>Fasilitas : {{ $cat->fasilitas }}</p>
            </div>
        </div>
    </div>
    @endforeach

    @foreach($cats as $cat)
    <div class="card-body">
        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
            <div class="mr-lg-3 mb-3 mb-lg-0">
                <a href="{{url('dashboard-sec/detail/'.$cat->id)}}" data-popup="lightbox">
                    <img src="{{asset($cat->image)}}" width="180" height="135" alt="">
                </a>
            </div>

            <div class="media-body">
                <h6 class="media-title font-weight-semibold">
                    <a href="#">{{$cat->title}}</a>
                </h6>

                <h4 style="color:orange;">Harga Rp. {{$cat->harga}}</h4>
                <p>Luas Bangunan : {{ $cat->lb }}</p>
                <p>Luas Tanah : {{ $cat->lt }}</p>
                <p>Fasilitas : {{ $cat->fasilitas }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection