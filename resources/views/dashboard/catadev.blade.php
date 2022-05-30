@extends('catalog')
@section('dev') active @endsection
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
            <a href="{{url('dashboard-dev/item/'.$category->id)}}"><img class="card-img-top img-fluid"
                    src="{{asset($category->gambar)}}" style="aspect-ratio: 4/3;" alt=""></a>

            <div class="card-body">
                <a href="{{url('dashboard-dev/item/'.$category->id)}}">
                    <h5 class="card-title">{{$category->nama_dev}}</h5>
                </a>
                <p class="card-text">
                    @if(strlen($category->desc) > 100)
                    {{substr($category->desc,0,100)}}
                    <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                    <span class="read-more-content">
                        {{substr($category->desc,100,strlen($category->desc))}}
                        <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                    @else
                    {{$category->desc}}
                    @endif
                </p>
            </div>

            <div class="card-footer d-flex justify-content-start">
                <div style="color:#1565c0">
                    <i class="icon-location3 mr-2"></i>
                    {{$category->lokasi}}
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
            <a href="{{url('dashboard-dev/item/'.$category->id)}}"><img class="card-img-top img-fluid"
                    src="{{asset($category->gambar)}}" style="aspect-ratio: 4/3;" alt=""></a>

            <div class="card-body">
                <a href="{{url('dashboard-dev/item/'.$category->id)}}">
                    <h5 class="card-title">{{$category->nama_dev}}</h5>
                </a>
                <p class="card-text">
                    @if(strlen($category->desc) > 100)
                    {{substr($category->desc,0,100)}}
                    <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                    <span class="read-more-content">
                        {{substr($category->desc,100,strlen($category->desc))}}
                        <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                    @else
                    {{$category->desc}}
                    @endif
                </p>
            </div>

            <div class="card-footer d-flex justify-content-start">
                <div style="color:#1565c0">
                    <i class="icon-location3 mr-2"></i>
                    {{$category->lokasi}}
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
<script type="text/javascript">
// Hide the extra content initially:
$('.read-more-content').addClass('hide_content')
$('.read-more-show, .read-more-hide').removeClass('hide_content')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
    $(this).next('.read-more-content').removeClass('hide_content');
    $(this).addClass('hide_content');
    e.preventDefault();
});
$('.read-more-hide').on('click', function(e) {
    var p = $(this).parent('.read-more-content');
    p.addClass('hide_content');
    p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
    e.preventDefault();
});
</script>
<style type="text/css">
.read-more-show {
    cursor: pointer;
    color: #ed8323;
}

.read-more-hide {
    cursor: pointer;
    color: #ed8323;
}

.hide_content {
    display: none;
}
</style>
@endsection