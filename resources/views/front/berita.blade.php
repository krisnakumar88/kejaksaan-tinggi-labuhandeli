@extends('template.FrontTemplate')

@section('konten')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({!! asset('front/img/bg-berita.jpg') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $judul }}</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                ============================================= -->
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">

                        @foreach ($berita as $data)
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('berita_detail', $data->slug) }}"><img
                                                src="{{ asset('file') }}/{{ $data->file->name }}" alt="Thumb"></a>
                                        <div class="date">
                                            <h4><span>{{ $data->created_at->format('d') }}</span>
                                                {{ $data->created_at->format('M') }}, {{ $data->created_at->format('Y') }}
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="{{ route('berita_detail', $data->slug) }}">{{ $data->judul }}</a>
                                        </h3>
                                        <p>
                                            {{ route('berita_detail', $data->slug) }} {{ $data->judul }}
                                        </p>
                                        <a href="{{ route('berita_detail', $data->slug) }}">Baca
                                            Selanjutnya <i class="fas fa-angle-double-right"></i></a>
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fas fa-user"></i>
                                                        {{ $data->user->name }}</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fas fa-comments"></i> 0 Komentar</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                        <!-- Pagination -->

                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                {{-- <nav aria-label="navigation">
                                    <ul class="pagination">

                                        <li class="disabled"><a href="#">Sebelumnya</a></li>





                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=2">2</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=3">3</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=4">4</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=5">5</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=6">6</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=7">7</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=8">8</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=9">9</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=10">10</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=11">11</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=12">12</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=13">13</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=14">14</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=15">15</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=16">16</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=17">17</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=18">18</a>
                                        </li>

                                        <li class="disabled"><a href="#">...</a></li>





                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=175">175</a>
                                        </li>
                                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=176">176</a>
                                        </li>


                                        <li><a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita?page=2">Selanjutnya</a>
                                        </li>
                                    </ul>
                                </nav> --}}
                                {!! $berita->links() !!}

                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>

                            <!-- Start Sidebar Item -->

                            <!-- End Sidebar Item -->

                            <!-- Start Sidebar Item -->
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Kategori</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach ($kategori as $data)
                                            <li><a
                                                    href="/kategori-berita/{{ $data->id }}">
                                                    {{ $data->nama }} </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Start Sidebar Item -->
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Berita Terbaru</h4>
                                </div>

                                @foreach ($beritanew as $data)

                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a
                                                href="{{ route('berita_detail', $data->slug) }}">
                                                <img src="{{ asset('file') }}/{{ $data->file->name }}"
                                                    alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a
                                                    href="{{ route('berita_detail', $data->slug) }}">{{ $data->judul }}</a>
                                            </h5>
                                            <div class="meta">
                                                <i class="fas fa-user"></i><a href="#">{{ $data->user->name }}</a></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach








                            </div>
                            <!-- End Sidebar Item -->


                            {{-- <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Arsip Berita</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-01">
                                                Januari 2023 <span>65</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-02">
                                                Februari 2023 <span>43</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-03">
                                                Maret 2023 <span>50</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-04">
                                                April 2023 <span>19</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-05">
                                                Mei 2023 <span>35</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-06">
                                                Juni 2023 <span>46</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-07">
                                                Juli 2023 <span>51</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-08">
                                                Agustus 2023 <span>29</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-09">
                                                September 2023 <span>13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-10">
                                                Oktober 2023 <span>53</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://kejati-sumaterautara.kejaksaan.go.id/arsip-berita/2023-11">
                                                November 2023 <span>10</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>



                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Galeri Photo</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                    </ul>
                                </div>
                            </div> --}}


                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
