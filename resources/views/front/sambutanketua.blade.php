@extends('template.FrontTemplate')

@section('konten')
@foreach($getData as $item)
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(https://kejati-sumaterautara.kejaksaan.go.id/web/assets/img/kejati/bg-halaman.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $item->title }}</h1>

            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<div class="blog-area full-blog standard single-blog full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-10 col-md-offset-1">
                    <div class="item-box">

                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img class="img-responsive center-block"
                                        src="https://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/ketua_063644.jpg"
                                        alt="Thumb"></a>

                            </div>
                            <div class="info">
                                <h3>
                                    {{ $item->title }}
                                </h3>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> Author</a></li>
                                    </ul>
                                </div>
                                <!-- begin tentang -->
                                {{ $item->tentang }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection