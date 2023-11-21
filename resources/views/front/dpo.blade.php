@extends('template.FrontTemplate')

@section('konten')
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(https://kejati-sumaterautara.kejaksaan.go.id/web/assets/img/kejati/bg-berita.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Daftar Pencarian Orang</h1>

            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<section id="advisor" class="advisor-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="advisor-items text-center text-light">
                <!-- Single Item -->
                @foreach($getDpo as $itemsDpo)
                <div class="col-md-4 col-sm-6 single-item">
                    <div class="advisor-item">
                        <div class="info-box">
                            <img src="{{ asset('file') }}/{{ $itemsDpo->getFile->name }}"
                                alt="Thumb">
                            <div class="info-title">
                                <h4>{{ $itemsDpo->nama }}</h4>
                                <span>{{ $itemsDpo->keterangan }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Single Item -->
            </div>
        </div>
    </div>
</section>
@endsection