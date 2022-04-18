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
        <h5 class="card-title">Developer</h5>
        <div class="header-elements">
        </div>
    </div>
    @foreach($data as $category)
    <div class="card-body">
        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
            <div class="mr-lg-3 mb-3 mb-lg-0">
                <a href="{{url('dashboard-dev/item/'.$category->id)}}" data-popup="lightbox">
                    <img src="{{asset($category->gambar)}}" width="180" height="135" alt="">
                </a>
            </div>

            <div class="media-body">
                <h6 class="media-title font-weight-semibold">
                    <a href="{{url('dashboard-dev/item/'.$category->id)}}">{{$category->nama_dev}}</a>
                </h6>

                <p>{!! $category->desc !!}</p>
                <!-- <p>{!! substr($category->desc,0,600) !!}</p> -->
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection