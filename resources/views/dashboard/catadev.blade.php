@extends('catalog')
@section('')
@endsection
@section('pgtitle','Developer 1')
@section('title2', '- Developer 1')
@section('navigation')
<a href="#" class="breadcrumb-item">Katalog Produk</a>
<span class="breadcrumb-item active">Developer</span>
@endsection
@section('catacont')
<!-- Info alert -->
<!-- <div class="alert alert-info bg-white alert-styled-left alert-arrow-left alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    <h6 class="alert-heading font-weight-semibold mb-1">Info</h6>
    Pin point lokasi bisa diklik, gambar resolusi 4:3, komersil dan subsidi kalau bisa pagination nya dipisah
</div> -->
<!-- /info alert -->


<!-- content cards -->
<div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
        Rumah Komersil
    </h6>
    <!-- <span class="text-muted d-block">adalah bla bla bla</span> -->
</div>
<div class="row">
    @foreach($data as $category)
    <div class="col-lg-6">
        <div class="card">
            <a href="{{url('dashboard-dev/item/'.$category->id)}}"><img class="card-img-top img-fluid aspect-ratio--3x4"
                    src="{{asset($category->gambar)}}" alt=""></a>

            <div class="card-body">
                <a href="{{url('dashboard-dev/item/'.$category->id)}}">
                    <h5 class="card-title">{{$category->nama_dev}}</h5>
                </a>
                <p class="card-text">{!! $category->desc !!}</p>
            </div>

            <div class="card-footer d-flex justify-content-start">
                <div>
                    <a href="{{$category->link_lokasi}}"><i class="icon-location3 mr-2"></i>
                        {{$category->lokasi}}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex">
    <div class="mx-auto">
        {{ $data->appends(['data' => $data->currentPage()])->links() }}
    </div>
</div>


<div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
        Rumah Subsidi
    </h6>
    <!-- <span class="text-muted d-block">adalah bla bla bla</span> -->
</div>
<div class="row">
    @foreach($subdata as $category)
    <div class="col-lg-6">
        <div class="card">
            <a href="{{url('dashboard-dev/item/'.$category->id)}}"><img class="card-img-top img-fluid aspect-ratio--3x4"
                    src="{{asset($category->gambar)}}" alt=""></a>

            <div class="card-body">
                <a href="{{url('dashboard-dev/item/'.$category->id)}}">
                    <h5 class="card-title">{{$category->nama_dev}}</h5>
                </a>
                <p class="card-text">{!! $category->desc !!}</p>
            </div>

            <div class="card-footer d-flex justify-content-start">
                <div>
                    <a href="{{$category->link_lokasi}}"><i class="icon-location3 mr-2"></i>
                        {{$category->lokasi}}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex">
    <div class="mx-auto">
        {{ $subdata->appends(['subdata' => $subdata->currentPage()])->links() }}
    </div>
</div>
<!-- /content cards -->
@endsection