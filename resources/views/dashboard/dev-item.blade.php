@extends('catalog')
@section('dev') active @endsection
@section('')
@endsection
@section('pgtitle','Developer Item')
@section('title2', '- Developer Item')
@section('navigation')
<a href="{{url('dashboard-dev')}}" class="breadcrumb-item">Katalog Developer</a>
<span class="breadcrumb-item active">{{$data->nama_dev}}</span>
@endsection
@section('catacont')
<!-- <div class="card">
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
</div> -->
<!-- content cards -->
<div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
        {{$data->nama_dev}}
    </h6>
    <!-- <span class="text-muted d-block">adalah bla bla bla</span> -->
</div>
<div class="row">
    @foreach($categoryitems as $category)
    <div class="col-lg-6">
        <div class="card">
            <a href="{{url('dashboard-dev/detail/'.$category->id)}}"><img
                    class="card-img-top img-fluid aspect-ratio--3x4" src="{{asset($category->image)}}" alt=""></a>

            <div class="card-body">
                <a href="{{url('dashboard-dev/detail/'.$category->id)}}">
                    <h5 class="card-title">{{$category->title}}</h5>
                </a>
                <h6 class="font-weight-semibold">Harga Rp.
                    {{$category->harga}}
                </h6>
                <p class="card-text">{{$category->description}}</p>
                <a href="https://wa.me/+628111160311"><img src="{{asset('assets/images/wa.gif')}}"
                        style="max-height: 30px;" alt=""> <span style="color: #40c351;">Contact Us</span></a>
            </div>
            <div class="card-footer d-flex justify-content-start">
                <div>
                    <a href="#"><i class="icon-location3 mr-2"></i>
                        {{$category->developer->lokasi}}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection