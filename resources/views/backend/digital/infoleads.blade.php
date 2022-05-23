@extends('backend/dashboard')
@section('title','Digital')
@section('headtitle','Digital Marketing')
@section('navbar')
<li class="nav-item">
    <a href="{{url ('dashboard/primary/developer')}}" class="navbar-nav-link">
        <i class="icon-home2 mr-2"></i>
        Primary
    </a>
</li>

<li class="nav-item">
    <a href="{{url ('dashboard/secondary')}}" class="navbar-nav-link">
        <i class="icon-city mr-2"></i>
        Secondary
    </a>
</li>
<li class="nav-item">
    <a href="{{url ('dashboard/digital')}}" class="navbar-nav-link active">
        <i class="icon-display mr-2"></i>
        Digital Marketing
    </a>
</li>
@endsection
@section('dashcontent')
<!-- Detail Iklan -->
<div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
        Detail Leads
    </h6>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-xl-12">
        <div class="card blog-horizontal">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <p>Nama</p>
                        <p>Kota</p>
                        <p>Nomor Handphone</p>
                        <p>Tanggal</p>
                        <p>Minat</p>
                        <p>Keterangan</p>
                    </div>

                    <div class="col-md-6">
                        <p>: {{$detail->nama_cus}}</p>
                        <p>: {{$detail->kota}}</p>
                        <p>: {{$detail->nohp}}</p>
                        <p>: {{$detail->tanggal}}</p>
                        <p>: {{$detail->minat}}</p>
                        <p>: {{$detail->keterangan}}</p>
                    </div>

                    <div class="col-12">
                        <h6 class="font-weight-semibold">Messages</h6>
                        <ul class="media-list">
                            @foreach ($message as $date => $posts)
                            <li class="media content-divider justify-content-center text-muted mx-0">
                                <span class="px-2">{{$date}}</span>
                            </li>
                            @foreach ($posts as $post)
                            <li class="media">
                                <div class="mr-3"><img src="{{asset('assets/images/placeholders/placeholder.jpg')}}"
                                        class="rounded-circle" width="40" height="40" alt=""></div>
                                <div class="media-body">
                                    <ul class="media-title list-inline list-inline-dotted">
                                        <li class="list-inline-item"><a href="#"
                                                class="font-weight-semibold">Telemarketing</a></li>
                                        <li class="list-inline-item">
                                            <span class="font-size-sm text-muted">{!! date('H:i:s',
                                                strtotime($post->updated_at)) !!}</span>
                                        </li>
                                    </ul>
                                    {{$post->pesan}}
                                </div>
                            </li>
                            @endforeach

                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Fasilitas:
                </br>Dekat dengan Neraka</br>Penjagaan 24/7 Oleh malaikat</br>Akses menuju <a href="#">[...]</a> -->
            </div>
        </div>
    </div>
</div>
@endsection