@extends('catalog')
@section('')
@endsection
@section('pgtitle','Katalog Developer - Detail')
@section('title2', '- Katalog Developer - Detail')
@section('navigation')
<a href="{{url('dashboard-dev')}}" class="breadcrumb-item">Katalog Developer</a>
<a href="#" class="breadcrumb-item">Detail</a>
<span class="breadcrumb-item active">{{$data->title}}</span>
@endsection
@section('catacont')
<div class="card">
    <div class="card-header header-elements-lg-inline">
        <h5 class="card-title">{{$data->title}}</h5>
    </div>

    <div class="nav-tabs-responsive bg-light border-top">
        <ul class="nav nav-tabs nav-tabs-bottom flex-nowrap mb-0">
            <li class="nav-item"><a href="#course-overview" class="nav-link active" data-toggle="tab"><i
                        class="icon-menu7 mr-2"></i> Overview</a></li>
            <li class="nav-item"><a href="#course-attendees" class="nav-link" data-toggle="tab"><i
                        class="icon-people mr-2"></i> Product Detail</a></li>
            <li class="nav-item"><a href="#course-schedule" class="nav-link" data-toggle="tab"><i
                        class="icon-calendar3 mr-2"></i> ...</a></li>
        </ul>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="course-overview">
            <div class="card-body">
                <div class="row">
                    @foreach($categoryitems as $category)
                    <div class="mr-lg-3 mb-3 mb-lg-0">
                        <a href="assets/images/placeholders/cover.jpg" data-popup="lightbox">
                            <img class="img-responsive img-thumbnail ratio-4-3"
                                src="{{asset('uploads/gallery/'.$category->cover_image)}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="mt-1 mb-4">
                    <h6 class="font-weight-semibold">Harga Mulai Dari Rp.
                        {{$data->harga}}
                    </h6>
                    <p>{{$data->description}}</p>
                </div>


            </div>
        </div>

        <div class="tab-pane fade" id="course-attendees">
            <div class="card-body">
                <h4 class="font-weight-semibold">Harga :
                    {{$data->harga}}
                </h4>
                <h6 class="font-weight-semibold">Luas Tanah :
                    {{$data->lt}}
                </h6>
                <h6 class="font-weight-semibold">Luas Bangunan :
                    {{$data->lb}}
                </h6>
                <h6 class="font-weight-semibold">Fasilitas :
                    {{$data->fasilitas}}
                </h6>
                <h5 class="font-weight-semibold">Deskripsi Rumah :
                </h5>
                <p>{{$data->description}}</p>
            </div>
        </div>

        <div class="tab-pane fade" id="course-schedule">
            <div class="card-body">
                <div class="schedule"></div>
            </div>
        </div>
    </div>
</div>
@endsection