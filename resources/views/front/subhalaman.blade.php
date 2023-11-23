@extends('template.FrontTemplate')

@section('konten')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({!! asset('front/img/bg-halaman.jpg') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $subhalaman->judul }}</h1>

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
                                    <a href="#"><img src="{{ asset('file') }}/{{ $subhalaman->file->name }}"
                                            alt="Thumb"></a>
                                    <div class="date">
                                        <h4><span>{{ $subhalaman->created_at->format('d') }}</span>
                                            {{ $subhalaman->created_at->format('M') }}, {{ $subhalaman->created_at->format('Y') }}
                                        </h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        {{ $subhalaman->judul }}
                                    </h3>
                                    <div class="meta">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-user"></i> {{ $subhalaman->user->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    {!! $subhalaman->content !!}
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
