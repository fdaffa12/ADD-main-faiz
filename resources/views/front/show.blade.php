@extends('front.layouts')
@section('title') <title>Primary Property - Add Property</title> @endsection
@section('property') active @endsection
@section('allprim') active @endsection
@section('content')
<!--/ Property Star /-->
<section class="section-property section-t6">
    <div class="color-z">
        <div class="container color-z" style="padding-top: 20px; padding-bottom:20px">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between pt-2">
                        <div class="title-box">
                            <h2 class="title-a" style="color: #ffff;">Perumahan Terlaris</h2>
                        </div>
                        <div class="title-link-z">
                            <a href="{{url('dashboard/all-property')}}">Perumahan Terlaris Lainnya
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                @foreach($highlight as $post)
                <div class="carousel-item-b">
                    <div class="cards">
                        <div class="card-box-a card-shadow" style="margin-bottom:-10px;">
                            <div class="img-box-a">
                                <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3; border-radius: 0.25rem"
                                    alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-title-b">
                                        <h2 class="title-3">
                                            <a href="{{url('detail/'.$post->title)}}">Selengkapnya
                                                <span class="ion-ios-arrow-forward"></span></a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="padding:1.5rem;">
                            <div class="price-box d-flex pb-2" style="margin-top:1px">
                                <span class="price-z">Cicilan | @currency($post->harga)</span>
                            </div>
                            <h4 class="card-title-a ml-3"
                                style="font-size: 20px; margin-bottom: -3px; margin-top: -3px;">
                                <a href="{{url('detail/'.$post->title)}}">{!!
                                    Str::limit($post->title,25, '...') !!}</a>
                            </h4>
                            <ul class="card-info d-flex justify-content-around"
                                style="margin-top:-5px; margin-bottom:-19px">
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Buliding</h4>
                                    <span class="color-x">{{$post->lb}}<sup>2</sup>
                                    </span>
                                </li>
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Area</h4>
                                    <span>{{$post->lt}}<sup>2</sup>
                                    </span>
                                </li>
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Beds</h4>
                                    <span>{{$post->kt}}</span>
                                </li>
                                <li>
                                    <h4 class="card-info-title" style="margin-bottom: 3px;">Baths</h4>
                                    <span>{{$post->km}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--/ Property End /-->

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                @if( request()->input('keyword') == '' && request()->input('max_price') == '' &&
                request()->input('min_price') == '')
                <p></p>
                @else
                <p> <strong>{{ $primary->total() }}</strong> hasil pencarian {{ request()->input('keyword') }}
                    {{ request()->input('kategori') }}
                    harga dibawah
                    @currency(request()->input('max_price'))
                </p>
                @endif
                <div class="title-single-box">
                    <h1 class="title-a">Properti Dari Kami</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Grid Star /-->
<section class="news-grid grid">
    <div class="container">
        <div class="tab-content pb-2">
            <div class="tab-pane fade show active" id="basic-pill1">
                <div class="row">
                    @foreach($primary as $post)
                    <div class="col-md-4">
                        <div class="card" style="margin-bottom: 30px;">
                            <div class="card-box-a card-shadow" style="margin-bottom:-10px;">
                                <div class="img-box-a">
                                    <img src="{{asset($post->image)}}" style="aspect-ratio: 4/3; border-radius: 0.25rem"
                                        alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            @if( $post->kategori == 'baru' )
                                            <a href="#" class="category-b">Baru</a>
                                            @else
                                            <a href="#" class="category-b">Bekas</a>
                                            @endif
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-3">
                                                <a href="{{url('detail/'.$post->title)}}">Selengkapnya
                                                    <span class="ion-ios-arrow-forward"></span></a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="padding:1.5rem;">
                                <div class="price-box d-flex pb-2" style="margin-top:1px">
                                    <span class="price-z">Cicilan | @currency($post->harga)</span>
                                </div>
                                <h4 class="card-title-a ml-3"
                                    style="font-size: 20px; margin-bottom: -3px; margin-top: -3px;">
                                    <a href="{{url('detail/'.$post->title)}}">{!!
                                        Str::limit($post->title,25, '...') !!}</a>
                                </h4>
                                <ul class="card-info d-flex justify-content-around"
                                    style="margin-top:-5px; margin-bottom:-19px">
                                    <li>
                                        <h4 class="card-info-title" style="margin-bottom: 3px;">Buliding</h4>
                                        <span class="color-x">{{$post->lb}}<sup>2</sup>
                                        </span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title" style="margin-bottom: 3px;">Area</h4>
                                        <span>{{$post->lt}}<sup>2</sup>
                                        </span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title" style="margin-bottom: 3px;">Beds</h4>
                                        <span>{{$post->kt}}</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title" style="margin-bottom: 3px;">Baths</h4>
                                        <span>{{$post->km}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            {{ $primary->withQueryString()->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ News Grid End /-->

<script>
$('#myDropdown .dropdown-menu').on({
    "click": function(e) {
        e.stopPropagation();
    }
});
$('.closer').on('click', function() {
    $('.btn-group').removeClass('open');
});
</script>
@endsection