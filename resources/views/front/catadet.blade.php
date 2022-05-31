@extends('front.layouts')
@section('title') <title>{{$data->title}} - Add Property</title> @endsection
@section('property') active @endsection
@section('allprim') active @endsection
@section('content')
<!--/ Intro Single star /-->
<section class="intro-single">
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
                <div class="row justify-content-between pt-3">
                    <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="ion-money">Rp</span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c">{{$data->harga}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">Quick Summary</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <ul class="list">
                                    <li class="d-flex justify-content-between">
                                        <strong>Location:</strong>
                                        <span>{{$data->lokasi}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Property Type:</strong>
                                        <span>{{$data->type}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Buliding:</strong>
                                        <span>{{$data->lb}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Area:</strong>
                                        <span>{{$data->lt}}
                                        </span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Beds:</strong>
                                        <span>{{$data->kt}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Baths:</strong>
                                        <span>{{$data->km}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Property Description</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a">
                                {!! nl2br(e($data->description)) !!}
                            </p>
                        </div>
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Facility</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a">
                                {!! nl2br(e($data->fasilitas)) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Property Single End /-->

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