@extends('template.FrontTemplate')

@section('konten')
    <!-- Start Banner
                ============================================= -->
    <div class="banner-area content-top-heading less-paragraph text-normal">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url({!! asset('front/img/bg-3.jpg') !!});">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">Bersama Wujudkan</h3>
                                            <h1 data-animation="animated slideInUp">Humanis Etis Bermartabat Amanah
                                                Tertib</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="slider-thumb bg-fixed" style="background-image: url({!! asset('front/img/bg-4.jpg') !!});">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">Bersama Kami</h3>
                                            <h1 data-animation="animated slideInUp">Wujudkan Pelayanan Jujur Adil
                                                Transparan</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="slider-thumb bg-fixed" style="background-image: url({!! asset('front/img/bg-2.jpg') !!});">
                    </div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->


    <!-- Spesial Link
                ============================================= -->
    <div class="top-cat-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col top-cat-items text-light inc-bg-color text-center">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202306/Gambar_WhatsApp_2023_06_26_pukul_08_06_15.jpg);">
                                <a href="https://ppid.kejaksaan.go.id">
                                    <i class="fas fa-assistive-listening-systems"></i>
                                    <div class="info">
                                        <h4>E-PPID</h4>
                                        <span>Pengelola Informasi</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202306/Gambar_WhatsApp_2023_06_26_pukul_16_36_47_170452.jpg);">
                                <a href="https://forms.gle/LCBfXgQszxxZ6R527">
                                    <i class="fas fa-home"></i>
                                    <div class="info">
                                        <h4>SIPANDU DESA</h4>
                                        <span>Sistem Informasi Desa</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/gedung2.jpg);">
                                <a href="https://www.lapor.go.id">
                                    <i class="far fa-file-alt"></i>
                                    <div class="info">
                                        <h4>SP4N LAPOR</h4>
                                        <span>Sistem Pengaduan Nasional</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/PTSP_6_110125.jpg);">
                                <a href="https://sipp.menpan.go.id/pelayanan-instansi/pusat">
                                    <i class="fas fa-box-open"></i>
                                    <div class="info">
                                        <h4>SIPPN</h4>
                                        <span>Sistem Pelayanan Publik Nasional</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/PTSP_6_110125.jpg);">
                                <a href="https://cms-publik.kejaksaan.go.id">
                                    <i class="fas fa-archway"></i>
                                    <div class="info">
                                        <h4>CMS Publik</h4>
                                        <span>Kejaksaan Republik Indonesia</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/PTSP_6_110125.jpg);">
                                <a href="https://kejati-sumaterautara.kejaksaan.go.id/wbs">
                                    <i class="fas fa-calendar-check"></i>
                                    <div class="info">
                                        <h4>WBS</h4>
                                        <span>Whistle Blowing System</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/PTSP_6_110125.jpg);">
                                <a href="https://kejati-sumaterautara.kejaksaan.go.id/pengaduan">
                                    <i class="fas fa-user-edit"></i>
                                    <div class="info">
                                        <h4>PENGADUAN</h4>
                                        <span>Pengaduan Masyarakat</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/PTSP_3_110124.jpg);">
                                <a href="http://156.67.219.105/laporan/public/login">
                                    <i class="fas fa-atlas"></i>
                                    <div class="info">
                                        <h4>SIPELA</h4>
                                        <span>Pelaporan Lapinhar Lapinsus</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/PTSP_6_110125.jpg);">
                                <a href="http://siabangdatun-kejatisumut.com/">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    <div class="info">
                                        <h4>SIABANG DATUN</h4>
                                        <span>Sistem Aplikasi Datun</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-height">
                            <div class="item malachite"
                                style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/PTSP_6_110125.jpg);">
                                <a href="https://cmckejatisumut.com/auth/login">
                                    <i class="fas fa-bezier-curve"></i>
                                    <div class="info">
                                        <h4>CMC</h4>
                                        <span>Case Management Center</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="col-md-3 col-sm-3 equal-height">
                        <div class="item malachite"
                            style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202307/OIP.jpg);">
                            <a href="http://atcsdishub.pemkomedan.go.id/#streaming">
                                <i class="fas fa-angle-double-right"></i>
                                <div class="info">
                                    <h4>CCTV Kota Medan</h4>
                                    <span>Live Streaming Jalan Kota Medan</span>
                                </div>
                            </a>
                        </div>
                    </div> --}}


                    </div>
                </div>
                <!-- End Top Category -->

            </div>
        </div>
    </div>
    <!-- Spesial Link -->

    <!-- Sambutan
                ============================================= -->
    <div class="about-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-5 thumb">
                        <img src="{{ asset('file') }}/{{ $getKatasambutan->file->name }}" alt="Thumb">
                    </div>
                    <div class="col-md-7 info">
                        <h5>{{ $getKatasambutan->subtitle }}</h5>

                        <h2>{{ $getKatasambutan->title }}</h2>
                        <p>
                            {!! strip_tags(Str::limit($getKatasambutan->tentang, 1000)) !!}
                        </p>
                        <a href="{{ route('sambutan') }}" class="btn btn-dark border btn-md">Baca Selengkapnya</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Berita Terbaru
                ============================================= -->
    <div id="blog" class="blog-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Berita Terbaru</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    @foreach ($beritaTerbaru as $value)
                        <div class="col-md-4 single-item">
                            <div class="item">
                                <div class="thumb" style="max-height: 250px">
                                    <a href="{{ route('berita_detail', $value->slug) }}"><img
                                            src="{{ asset('file') }}/{{ $value->file->name }}" alt="Thumb"></a>
                                    <div class="date">
                                        <h4><span>{{ $value->created_at->format('d') }}</span>
                                            {{ $value->created_at->format('M') }}, {{ $value->created_at->format('Y') }}</h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4 style="min-height: 85px;max-height: 85px">
                                        <a href="{{ route('berita_detail', $value->slug) }}">{{ $value->judul }}</a>
                                    </h4>
                                    {{-- <p style="min-height: 130px; max-height: 130px">
                                        Membangun Legasi Kejaksaan Yang Lebih Dipercaya Masyarakat
                                    </p> --}}
                                    <a href="{{ route('berita_detail', $value->slug) }}">Baca
                                        selanjutnya <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-calendar-alt"></i> {{ $value->created_at->format('d') }} {{ $value->created_at->format('M') }} {{ $value->created_at->format('Y') }}</a></li>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> {{ $value->user->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
    <!-- End Berita Terbaru -->

    <!-- Staf
                ============================================= -->
    <section id="advisor" class="advisor-area circle default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center mb-0">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Pejabat Struktural</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="advisor-carousel owl-carousel owl-theme text-center text-light">
                        <!-- Single Item -->
                        @foreach ($getPejabat as $itemsPejabat)
                            <div class="advisor-item">
                                <div class="info-box">
                                    <img src="{{ asset('file') }}/{{ $itemsPejabat->getFile->name }}" alt="Thumb">
                                    <div class="info-title">
                                        <h4>{{ $itemsPejabat->nama }}</h4>
                                        <span>{{ $itemsPejabat->jabatan }}</span>
                                    </div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <div class="overlay-content">
                                                    <h4>Tentang<br>{{ $itemsPejabat->tentang }}</h4>
                                                    <p>
                                                        -
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End staf -->



    <!-- Start Video Area
                ============================================= -->
    <div class="video-area padding-xl text-center bg-fixed text-light shadow dark-hard"
        style="background-image: url({!! asset('front/img/bg-video.jpg') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-heading">
                        <h2>Video Tentang Kami</h2>
                        <p>
                            Dokumentasi video kegiatan terbaru dari Kejaksaan Tinggi Sumatera Utara
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="video-info">
                    <div class="overlay-video">
                        <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=lJvyWNkfkKs">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area -->

    <!-- Berita Populer
                ============================================= -->
    {{-- <section id="event" class="event-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Berita Populer</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="event-items">
                <div class="item horizontal col-md-12">
                    <div class="col-md-6 thumb bg-cover"
                        style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202205/Screenshot_2022_05_30_08_38_07_386_com_instagram_android.jpg);">
                        <div class="date">
                            <h4><span>30</span> May, 2022</h4>
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h4>
                            <a
                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/bidang-pidana-militer-kejati-sumut-bersama-oditurat-militer-i-02-medan-melaksanakan-kegiatan-koordinasi-dan-sosialisasi-tugas-fungsi-pidana-militer">Bidang
                                Pidana Militer Kejati Sumut bersama Oditurat Militer I-02 Medan Melaksanakan
                                Kegiatan Koordinasi dan Sosialisasi Tugas Fungsi Pidana Militer</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> 30 May, 2022</li>
                                <li><i class="fas fa-user"></i> Author</li>

                            </ul>
                        </div>
                        <p>Bidang Pidana Militer Kejati Sumut bersama Oditurat Militer I-02 Medan Melaksanakan
                            Kegiatan Koordinasi dan Sosialisasi Tugas Fungsi Pidana Militer</p>
                        <a href="https://kejati-sumaterautara.kejaksaan.go.id/berita/bidang-pidana-militer-kejati-sumut-bersama-oditurat-militer-i-02-medan-melaksanakan-kegiatan-koordinasi-dan-sosialisasi-tugas-fungsi-pidana-militer"
                            class="btn btn-dark effect btn-sm">
                            <i class="fas fa-chart-bar"></i> Baca selengkapnya
                        </a>
                    </div>
                </div>
                <div class="item vertical col-md-6">
                    <div class="thumb">
                        <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/berita4.png"
                            alt="Thumb">
                        <div class="date">
                            <h4><span>28</span> Apr, 2022</h4>
                        </div>
                    </div>
                    <div class="info">
                        <h4>
                            <a
                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/pendampingan-hukum-legal-asistance-terhadap-kegiatan-pembangunan-pasar-balerong-dan-pasar-aksara">Pendampingan
                                Hukum (Legal Asistance) Terhadap Kegiatan Pembangunan Pasar Balerong dan Pasar
                                Aksara</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> 28 Apr, 2022</li>
                                <li><i class="fas fa-user"></i> Author</li>

                            </ul>
                        </div>
                        <p>Senin, 25 April 2022 bertempat di Ruang Rapat Asdatun Kejati Sumut telah dilaksanakan
                            Rapat Terkait Pendampingan Hukum (Legal Assistance) Terhadap Kegiatan Pembangunan Pasar
                            Aksara dan Pasar Balerong Balige...</p>
                        <a href="https://kejati-sumaterautara.kejaksaan.go.id/berita/pendampingan-hukum-legal-asistance-terhadap-kegiatan-pembangunan-pasar-balerong-dan-pasar-aksara"
                            class="btn btn-dark effect btn-sm">
                            <i class="fas fa-chart-bar"></i> Baca Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="item vertical col-md-6">
                    <div class="thumb">
                        <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202208/WhatsApp_Image_2022_08_02_at_12_46_435.jpg"
                            alt="Thumb">
                        <div class="date">
                            <h4><span>05</span> Aug, 2022</h4>
                        </div>
                    </div>
                    <div class="info">
                        <h4>
                            <a
                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kepala-kejaksaan-tinggi-sumatera-utara-kajati-sumut-idianto-shmh-beserta-rombongan-kunjungi-kejaksaan-negeri-binjai">Kepala
                                Kejaksaan Tinggi Sumatera Utara (Kajati Sumut) Idianto, SH,MH beserta rombongan
                                kunjungi Kejaksaan Negeri Binjai</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> 05 Aug, 2022</li>
                                <li><i class="fas fa-user"></i> Author</li>

                            </ul>
                        </div>
                        <p>Kepala Kejaksaan Tinggi Sumatera Utara (Kajati Sumut) Idianto, SH,MH beserta rombongan
                            kunjungi Kejaksaan Negeri Binjai</p>
                        <a href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kepala-kejaksaan-tinggi-sumatera-utara-kajati-sumut-idianto-shmh-beserta-rombongan-kunjungi-kejaksaan-negeri-binjai"
                            class="btn btn-dark effect btn-sm">
                            <i class="fas fa-chart-bar"></i> Baca Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="item horizontal col-md-12">
                    <div class="col-md-6 thumb bg-cover"
                        style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/berita3.png);">
                        <div class="date">
                            <h4><span>28</span> Apr, 2022</h4>
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h4>
                            <a
                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/ketua-pwi-sumut-apresiasi-dan-dukung-kejati-sumut-wujudkan-zona-integritas-menuju-wbk">Ketua
                                PWI SUMUT Apresiasi dan Dukung KEJATI SUMUT Wujudkan Zona Integritas Menuju WBK</a>
                        </h4>
                        <div class="meta">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i> 28 Apr, 2022</li>
                                <li><i class="fas fa-user"></i> Author</li>

                            </ul>
                        </div>
                        <p>Ketua Persatuan Wartawan Indonesia Sumatera Utara (PWI Sumut) Farianda Putra Sinik
                            menyampaikan apresiasi kepada Kajati Sumut Idianto, SH,MH dengan 28 Kejari dan 9 Cabjari
                            di Sumatera Utara...</p>
                        <a href="https://kejati-sumaterautara.kejaksaan.go.id/berita/ketua-pwi-sumut-apresiasi-dan-dukung-kejati-sumut-wujudkan-zona-integritas-menuju-wbk"
                            class="btn btn-dark effect btn-sm">
                            <i class="fas fa-chart-bar"></i> Baca selengkapnya
                        </a>
                    </div>
                </div>

                <div class="more-btn col-md-12 text-center">
                    <a href="{{ route('front_berita') }}" class="btn btn-dark border btn-md">Lihat Semua Berita</a>
                </div>

            </div>
        </div>
    </div>
</section> --}}
    <!-- End Event -->

    <!-- DPO
                ============================================= -->
    <section id="advisor" class="advisor-area circle default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center mb-0">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Daftar Pencarian Orang (DPO)</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="advisor-carousel owl-carousel owl-theme text-center text-light">
                        <!-- Single Item -->
                        @foreach ($getDaftarpencarian as $itemsDaftar)
                            <div class="advisor-item">
                                <div class="info-box">
                                    <img src="{{ asset('file') }}/{{ $itemsDaftar->getFile->name }}" alt="Thumb">
                                    <div class="info-title">
                                        <h4>{{ $itemsDaftar->nama }}</h4>
                                        <span>{{ $itemsDaftar->kasus }}</span>
                                    </div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <div class="overlay-content">
                                                    <h4>Tentang<br>{{ $itemsDaftar->nama }}</h4>
                                                    <p>
                                                    <p style="text-align: justify;">{{ $itemsDaftar->keterangan }}</p>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End staf -->
    <!-- Galeri Photo
                ============================================= -->
    <div id="portfolio" class="portfolio-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center" style="margin-bottom: 0px;">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Galeri Photo</h2>
                    </div>
                </div>
            </div>
            <h4 style="text-align: center">Album_20231013110509_1697169909</h4>
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-4">





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Galeri Photo -->
@endsection
