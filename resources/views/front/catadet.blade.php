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
<section class="property-single nav-arrow-b pt-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Main-Slideelement -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($categoryitems as $key => $category)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"
                            class="item {{$key == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{asset('uploads/gallery/'.$category->cover_image)}}"
                                alt="">
                        </li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($categoryitems as $key => $category)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{asset('uploads/gallery/'.$category->cover_image)}}"
                                alt="First slide">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"
                            style="background-color: #103681; padding: 1rem; border-radius: 2px;"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"
                            style="background-color: #103681; padding: 1rem; border-radius: 2px;"></i>
                    </a>
                </div>
                <!-- Thumb-Slider-Element ends -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8">
                            <div class="row justify-content-between pt-3">
                                <div class="col-md-12 col-lg-12">
                                    <div class="title-box-d">
                                        @if( $data->kategori == 'baru' )
                                        <h3 class="title-d">Cicilan @currency($data->harga)</h3>
                                        @else
                                        <h3 class="title-d">Harga @currency($data->harga)</h3>
                                        @endif
                                    </div>
                                    <div class="summary-list">
                                        <div class="list">
                                            <span>Luas Bangunan {{$data->lb}}<sup>2</sup></span>
                                            <span> - </span>
                                            <span>Luas Tanah {{$data->lt}}<sup>2</sup></span>
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
                                    <div class="row" style="margin-bottom: 2rem;">
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
                                                                            <a href="{{url('detail/'.$post->title)}}">Selengkapnya
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
                                                                    @currency($data->harga)</span>
                                                            </div>
                                                            <h4 class="card-title-a ml-3"
                                                                style="font-size: 15px; margin-bottom: -3px; margin-top: -3px;">
                                                                <a href="{{url('detail/'.$post->title)}}">{!!
                                                                    Str::limit($post->title,25, '...') !!}</a>
                                                            </h4>
                                                            <ul class="card-info d-flex justify-content-around"
                                                                style="margin-top:-5px; margin-bottom:-19px">
                                                                <li>
                                                                    <h4 class="card-info-title"
                                                                        style="margin-bottom: 3px; font-size:12px">
                                                                        Buliding
                                                                    </h4>
                                                                    <span
                                                                        style="font-size:12px">{{$post->lb}}<sup>2</sup></span>
                                                                </li>
                                                                <li>
                                                                    <h4 class="card-info-title"
                                                                        style="margin-bottom: 3px; font-size:12px">
                                                                        Area
                                                                    </h4>
                                                                    <span
                                                                        style="font-size:12px">{{$post->lt}}<sup>2</sup></span>
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
                                        <a href="https://wa.me/+628111160311">
                                            <button type="button" class="tombol"><i class="fa fa-whatsapp"
                                                    aria-hidden="true"></i> Hubungi Sekarang</button>
                                        </a>
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
<!-- <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
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
</div> -->

<style>
.carousel-indicators li {
    width: 100px;
    height: 100%;
    opacity: 0.8;
}

.item.active img {
    border: 1px solid #103681;
    opacity: 1;
}
</style>
@endsection