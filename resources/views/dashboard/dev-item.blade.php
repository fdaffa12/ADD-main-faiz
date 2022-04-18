@extends('catalog')
@section('')
@endsection
@section('pgtitle','Developer Item')
@section('title2', '- Developer Item')
@section('navigation')
<a href="{{url('dashboard-dev')}}" class="breadcrumb-item">Katalog Developer</a>
<span class="breadcrumb-item active">{{$data->nama_dev}}</span>
@endsection
@section('catacont')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Developer {{$data->nama_dev}}</h5>
        <div class="header-elements">
        </div>
    </div>
    @foreach($categoryitems as $category)
    <div class="card-body">
        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
            <div class="mr-lg-3 mb-3 mb-lg-0">
                <a href="{{url('dashboard-dev/detail/'.$category->id)}}" data-popup="lightbox">
                    <img src="{{asset($category->image)}}" width="180" height="135" alt="">
                </a>
            </div>

            <div class="media-body">
                <h6 class="media-title font-weight-semibold">
                    <a href="#">{{$category->title}}</a>
                </h6>

                <p>{{$category->description}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection