@extends('front.layouts')
@section('title') <title>{{$data->title}} - Add Property</title> @endsection
@section('property') active @endsection
@section('allprim') active @endsection
@section('content')
<!--/ Intro Single star /-->
<section class="intro-single" style="padding-top: 7rem; padding-bottom: 0rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">{{$data->title}}</h1>
                    <span class="color-text-a">{{$data->lokasi}}</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<section class="property-single nav-arrow-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Main-Slideelement -->
                <div class="container-fluid">

                    <div id="demo" class="carousel slide vert" data-ride="carousel" data-interval="3000">

                        <div class="row no-gutters">

                            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                <div class="carousel-indicators">
                                    @foreach($categoryitems as $key => $category)
                                    <div data-target="#demo" data-slide-to="{{$key}}"
                                        class="item {{$key == 0 ? 'active' : '' }}"><img class="img-fluid"
                                            src="{{asset('uploads/gallery/'.$category->cover_image)}}" alt=""></div>
                                    @endforeach
                                </div>
                            </div><!-- col-sm-4 Indicators -->


                            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                <div class="carousel-inner">
                                    @foreach($categoryitems as $key => $category)
                                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                        <img class="img-fluid"
                                            src="{{asset('uploads/gallery/'.$category->cover_image)}}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <!--inner-->
                            </div><!-- col-sm-6  -->


                        </div>
                        <!--row-->
                    </div>
                    <!--container-->
                </div>
                <!-- Thumb-Slider-Element ends -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8">
                            <div class="row justify-content-between pt-3">
                                <div class="col-md-12 col-lg-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">@currency($data->harga)</h3>
                                    </div>
                                    <div class="summary-list">
                                        <div class="list">
                                            <span>Luas Bangunan {{$data->lb}}</span>
                                            <span> - </span>
                                            <span>Luas Bangunan {{$data->lb}}</span>
                                            <span> - </span>
                                            <span>Kamar Tidur {{$data->kt}}</span>
                                            <span> - </span>
                                            <span>Kamar Mandi {{$data->km}}</span>
                                        </div>
                                    </div>
                                    <span><i class="fa fa-map-marker" aria-hidden="true"></i> {{$data->lokasi}}</span>
                                    <hr class="garis">
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Deskripsi</h3>
                                    </div>
                                    <div class="summary-list">
                                        <div class="list">
                                            <span>{!! nl2br(e($data->description)) !!}</span>
                                        </div>
                                    </div>
                                    <hr class="garis">
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between pt-2">
                                                <div class="title-box">
                                                    <h2 class="title-a">Perumahan Terlaris</h2>
                                                </div>
                                                <div class="title-link-a">
                                                    <a href="{{url('dashboard/all-property')}}">Perumahan Terlaris
                                                        Lainnya
                                                        <span class="ion-ios-arrow-forward"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="property-carousel" class="owl-carousel owl-theme">
                                                @foreach($highlight as $post)
                                                <div class="carousel-item-b">
                                                    <div class="card">
                                                        <div class="card-box-a card-shadow"
                                                            style="margin-bottom:-10px;">
                                                            <div class="img-box-a">
                                                                <img src="{{asset($post->image)}}"
                                                                    style="aspect-ratio: 4/3; border-radius: 0.25rem"
                                                                    alt="" class="img-a img-fluid">
                                                            </div>
                                                            <div class="card-overlay">
                                                                <div class="card-header-b">
                                                                    <div class="card-title-b">
                                                                        <h2 class="title-3">
                                                                            <a
                                                                                href="{{url('dashboard-dev/detail/'.$post->id)}}">Selengkapnya
                                                                                <span
                                                                                    class="ion-ios-arrow-forward"></span></a>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body" style="padding:1.5rem;">
                                                            <div class="price-box d-flex pb-2" style="margin-top:1px">
                                                                <span class="price-z" style="font-size:12px">Cicilan |
                                                                    @currency($post->harga)</span>
                                                            </div>
                                                            <h4 class="card-title-a ml-3"
                                                                style="font-size: 16px; margin-bottom: -3px; margin-top: -3px;">
                                                                <a href="{{url('dashboard-dev/detail/'.$post->id)}}">{!!
                                                                    Str::limit($post->title,25, '...') !!}</a>
                                                            </h4>
                                                            <ul class="card-info d-flex justify-content-around"
                                                                style="margin-top:-5px; margin-bottom:-19px">
                                                                <li>
                                                                    <h4 class="card-info-title"
                                                                        style="margin-bottom: 3px; font-size:12px">
                                                                        Buliding
                                                                    </h4>
                                                                    <span style="font-size:12px">{{$post->lb}}</span>
                                                                </li>
                                                                <li>
                                                                    <h4 class="card-info-title"
                                                                        style="margin-bottom: 3px; font-size:12px">
                                                                        Area
                                                                    </h4>
                                                                    <span style="font-size:12px">{{$post->lt}}</span>
                                                                </li>
                                                                <li>
                                                                    <h4 class="card-info-title"
                                                                        style="margin-bottom: 3px; font-size:12px">
                                                                        Beds
                                                                    </h4>
                                                                    <span style="font-size:12px">{{$post->kt}}</span>
                                                                </li>
                                                                <li>
                                                                    <h4 class="card-info-title"
                                                                        style="margin-bottom: 3px; font-size:12px">
                                                                        Baths
                                                                    </h4>
                                                                    <span style="font-size:12px">{{$post->km}}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="justify-content-between pt-3 sticky-top" style="top: 100px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Ayo konsultasi dengan Add Property
                                        </h5>
                                        <button type="button" class="tombol" data-toggle="modal"
                                            data-target=".bd-example-modal-sm"><i class="fa fa-whatsapp"
                                                aria-hidden="true"></i> Hubungi Sekarang</button>
                                        <a data-toggle="collapse" href="#collapseExample" role="button"
                                            aria-expanded="false" aria-controls="collapseExample" style="justify-content: center;
    display: flex;">
                                            Tanya-tanya nanti<i class="fa fa-angle-down" aria-hidden="true"
                                                style="font-size: 20px; margin-top: 3px; margin-left: 3px;"></i>

                                        </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <p class="text-center" style="font-size: 10px;">Isi data diri anda dengan
                                                lengkap agar kami dapat
                                                mengubungi anda.</p>
                                            <form action="{{route('store.customer')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label style="margin-bottom:2px; font-size:13px;">Nama
                                                        Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_cus"
                                                        placeholder="Nama Lengkap" required>
                                                </div>
                                                <div class="form-group">
                                                    <label style="margin-bottom:2px; font-size:13px;">Nomor
                                                        Telepon</label>
                                                    <input type="number" class="form-control" name="nohp"
                                                        placeholder="Nomor Telepon" required>
                                                </div>

                                                <button type="submit" class="btn btn-primary"
                                                    style="background-color: #103681;">Kirim</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Property Single End /-->


<!-- modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="top:100px;">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi nomor telepon yuk,</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <p>Agar team kami selalu siap melayani kebutuhan property anda</p>

                <form action="{{route('store.customer')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label style="margin-bottom:2px; font-size:13px;">Nomor
                            Telepon</label>
                        <input type="number" class="form-control" name="nohp" placeholder="Nomor Telepon">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="background-color: #103681;">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.carousel {
    margin-top: 40px;
}

/* Make the image fully responsive */
.carousel-inner img {
    aspect-ratio: 4/3;
}

.carousel-indicators {
    display: inline-block;
    height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
    position: static;
    direction: rtl;
}

@media screen and (max-width:992px) {
    .carousel-indicators {
        display: inline-flex;
        direction: inherit;
        height: auto;
        width: 100%;
        max-width: 800px;
        overflow-x: auto;
        position: relative;
        margin-left: 0;
        margin-right: 0;
        overflow-y: hidden;
        justify-content: normal;
        margin-bottom: 20px;
    }

    .carousel-inner {
        margin-left: 0 !important;
    }

    .carousel-inner img {
        width: 100%;
    }
}

/* width */
::-webkit-scrollbar {
    width: 5px;
    height: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}

.item {
    margin-bottom: 10px;
    margin-left: 10px;
    cursor: pointer;
}

.item.active img {
    border: 1px solid #00ccff;
    opacity: 1;
}

.item img {
    border: 1px solid transparent;
    opacity: 0.5;
    transition: 0.5s;
}

.item:hover img {
    border: 1px solid #00ccff;
    opacity: 1;
}

.content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    padding: 10px;
}

.content p {
    font-size: 15px;
}

.content {
    position: static;
}



.vert .carousel-item-next.carousel-item-left,
.vert .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.vert .carousel-item-next,
.vert .active.carousel-item-right {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100% 0);
}

.vert .carousel-item-prev,
.vert .active.carousel-item-left {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
}
</style>

<script>
jQuery(document).ready(function($) {

    $('#myCarousel').carousel({
        interval: 5000
    });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function() {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function(e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-' + id).html());
    });
});
</script>
@endsection