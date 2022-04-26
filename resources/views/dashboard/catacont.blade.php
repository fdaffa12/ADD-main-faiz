@extends('catalog')
@section('')
@endsection
@section('pgtitle','Katalog Developer')
@section('title2', '- Katalog Developer')
@section('navigation')
<!-- <a href="#" class="breadcrumb-item">Katalog Developer</a> -->
<span class="breadcrumb-item active">Katalog Developer</span>
@endsection
@section('catacont')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Rumah Secondary</h5>
        <div class="header-elements">
        </div>
    </div>
    <div class="card-body">
        @foreach($secondary as $category)
        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
            <div class="mr-lg-3 mb-3 mb-lg-0">
                <a href="{{url('dashboard-sec/detail/'.$category->id)}}" data-popup="lightbox">
                    <img src="{{asset($category->image)}}" width="180" height="135" alt="">
                </a>
            </div>

            <div class="media-body">
                <h6 class="media-title font-weight-semibold">
                    <a href="{{url('dashboard-sec/detail/'.$category->id)}}">{{$category->title}}</a>
                </h6>
                <h4 style="color:orange;">Harga Rp. {{$category->harga}}</h4>
                <p>Luas Bangunan : {{ $category->lb }}</p>
                <p>Luas Tanah : {{ $category->lt }}</p>
                <p>Fasilitas : {{ $category->fasilitas }}</p>
                <!-- <p>{!! $category->desc !!}</p> -->
                <!-- <p>{!! substr($category->desc,0,600) !!}</p> -->
            </div>
        </div>
        @endforeach
        <ul class="pagination justify-content-center pt-3">
            {{ $secondary->links() }}
        </ul>
    </div>
</div>
@endsection