@extends('front.layouts')
@section('title') <title>Primary Property - Add Property</title> @endsection
@section('property') active @endsection
@section('allprim') active @endsection
@section('content')

<section class="intro-double sticky-top"
    style="background-color: #ffff; box-shadow: 1px 2px 15px rgb(100 100 100 / 30%);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-pills p-2">
                        <div class="tab-content">
                            <form action="{{ url('dashboard/all-property')}}" method="GET">
                                <div class="row">
                                    <li class="nav-item dropdown">
                                        @if( request()->input('max_price') == '' && request()->input('min_price') == ''
                                        )
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Harga</a>
                                        @elseif ( request()->input('min_price') > 0 && request()->input('max_price') ==
                                        '')
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-chevron-right" aria-hidden="true"></i>
                                            @currency(request()->input('min_price'))</a>
                                        @elseif ( request()->input('max_price') > 0 && request()->input('min_price') ==
                                        '')
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-chevron-left" aria-hidden="true"></i>
                                            @currency(request()->input('max_price'))</a>
                                        @elseif ( request()->input('max_price') > 0 && request()->input('min_price') >
                                        0)
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                            @currency(request()->input('min_price'))</a>
                                        @endif
                                        <div class="dropdown-menu dropdown-menu-right" style="padding: 1rem;">
                                            <!-- <div class="form-group">
                                                <input type="number" class="form-control" name="min_price"
                                                    placeholder="Minimum" value="{{ request()->input('min_price') }}"
                                                    style="width:200px;">
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <input type="number" class="form-control" name="max_price"
                                                    placeholder="Maximal" value="{{ request()->input('max_price') }}"
                                                    style="width:200px;">
                                            </div> -->
                                            <div class="input-group mb-2" style="width:200px;">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">RP</div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    name="min_price" placeholder="Maximal"
                                                    value="{{ request()->input('min_price') }}">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">RP</div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    name="max_price" placeholder="Maximal"
                                                    value="{{ request()->input('max_price') }}">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        @if( request()->input('keyword') == '')
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tipe
                                            Bangunan</a>
                                        @else
                                        <a href="#" class="nav-link dropdown-toggle text-capitalize"
                                            data-toggle="dropdown">{{request()->input('keyword')}}</a>
                                        @endif
                                        <div class="dropdown-menu dropdown-menu-right" style="padding: 1rem;">
                                            @if( request()->input('keyword') == '')
                                            <div class="form-check" style="width: 210px;">
                                                <input class="form-check-input" type="radio" name="keyword" value=""
                                                    checked>
                                                <label class="form-check-label" style="white-space: nowrap;">
                                                    Semua Jenis Bangunan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keyword"
                                                    value="rumah">
                                                <label class="form-check-label">
                                                    Rumah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keyword"
                                                    value="ruko">
                                                <label class="form-check-label">
                                                    Ruko
                                                </label>
                                            </div>
                                            @elseif ( request()->input('keyword') == 'rumah')
                                            <div class="form-check" style="width: 210px;">
                                                <input class="form-check-input" type="radio" name="keyword" value=""
                                                    checked>
                                                <label class="form-check-label" style="white-space: nowrap;">
                                                    Semua Jenis Bangunan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keyword"
                                                    value="rumah" checked>
                                                <label class="form-check-label">
                                                    Rumah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keyword"
                                                    value="ruko">
                                                <label class="form-check-label">
                                                    Ruko
                                                </label>
                                            </div>
                                            @elseif ( request()->input('keyword') == 'ruko')
                                            <div class="form-check" style="width: 210px;">
                                                <input class="form-check-input" type="radio" name="keyword" value=""
                                                    checked>
                                                <label class="form-check-label" style="white-space: nowrap;">
                                                    Semua Jenis Bangunan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keyword"
                                                    value="rumah">
                                                <label class="form-check-label">
                                                    Rumah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keyword" value="ruko"
                                                    checked>
                                                <label class="form-check-label">
                                                    Ruko
                                                </label>
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        @if ( request()->input('kategori') == '')
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Semua
                                            Kategori</a>
                                        @elseif ( request()->input('kategori') == 'baru')
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Baru</a>
                                        @elseif ( request()->input('kategori') == 'bekas')
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bekas</a>
                                        @endif
                                        <div class="dropdown-menu dropdown-menu-right" style="padding: 1rem;">
                                            @if ( request()->input('kategori') == '')
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" value=""
                                                    checked>
                                                <label class="form-check-label" style="white-space: nowrap;">
                                                    Semua Kategori
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    value="baru">
                                                <label class="form-check-label">
                                                    Baru
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    value="bekas">
                                                <label class="form-check-label">
                                                    Seken
                                                </label>
                                            </div>
                                            @elseif ( request()->input('kategori') == 'baru')
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" value="">
                                                <label class="form-check-label" style="white-space: nowrap;">
                                                    Semua Kategori
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    value="baru" checked>
                                                <label class="form-check-label">
                                                    Baru
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    value="bekas">
                                                <label class="form-check-label">
                                                    Seken
                                                </label>
                                            </div>
                                            @elseif ( request()->input('kategori') == 'bekas')
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" value="">
                                                <label class="form-check-label" style="white-space: nowrap;">
                                                    Semua Kategori
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    value="baru">
                                                <label class="form-check-label">
                                                    Baru
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    value="bekas" checked>
                                                <label class="form-check-label">
                                                    Seken
                                                </label>
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <input type="submit" value="Filter"
                                            style="background-color: #103681; border: #103681; color: #ffff; border-radius: 2px; padding: 0.5rem; width:100%; margin:4px;">
                                    </li>
                                </div>
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

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