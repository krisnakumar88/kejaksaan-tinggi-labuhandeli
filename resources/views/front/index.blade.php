@extends('template.FrontTemplate')

@section('konten')
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-top-heading less-paragraph text-normal">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixed"
                        style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/gedung2.jpg);">
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
                                            <p><a class="btn btn-light border btn-md" href="../../../halaman/sambutan-ketua"
                                                    data-animation="animated slideInUp">Sambutan</a> <a
                                                    class="btn btn-theme effect btn-md" href="../../../halaman/visi--misi"
                                                    data-animation="animated slideInUp">Visi Misi</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="slider-thumb bg-fixed"
                        style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/Panggung_Aspirasi_1.jpg);">
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
                                            <p><a class="btn btn-light border btn-md" href="#"
                                                    data-animation="animated slideInUp">Sambutan</a> <a
                                                    class="btn btn-theme effect btn-md" href="#"
                                                    data-animation="animated slideInUp">Visi Misi</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="slider-thumb bg-fixed"
                        style="background-image: url(http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202206/JAM_PELAYANAN_PTSP___Copy.png);">
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
                        <div class="col-md-3 col-sm-3 equal-height">
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
                        </div>


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
                        <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/ketua_063644.jpg"
                            alt="Thumb">
                    </div>
                    <div class="col-md-7 info">
                        <h5>Kepala Kejaksaan Tinggi Sumatera Utara</h5>

                        <h2>IDIANTO, S.H, M.H</h2>
                        <p>
                            Saya, Idianto, S.H., M.H., mengucapkan selamat datang di Website Kejaksaan Tinggi Sumatera
                            Utara.
                            Saya menyambut baik keberadaan serta upaya pembenahan webiste ini. Hal itu tidak saja dalam
                            rangka menjadikan Kejaksaan Tinggi Sumatera Utara menjadi lembaga yang lebih informatif dan
                            fungsional, melainkan juga untuk mewujudkan peran Kejaksaan Tinggi Sumatera Utara yang lebih
                            tegas, bersih, serta transparan, dalam menjalankan fungsinya.
                            Merespon tuntutan masyarakat terhadap kinerja institusi Kejaksaan, Kejaksaan Republik
                            Indonesia tengah berupaya melakukan reformasi birokrasi di yaitu dengan titik berat terhadap
                            percepatan dan optimalisasi penanganan perkara, penerapan sistem teknologi informasi dalam
                            penanganan perkara, penerapan sistem teknologi informasi terhadap laporan pengaduan dan
                            redesign website Kejaksaan yang informatif dan accessible terhadap masyarakat.
                            Webiste Kejaksaan Tinggi Sumatera Utara merupakan salah satu langkah penerapan teknologi
                            informasi menuju reformasi birokrasi Kejaksaan dan bentuk aktualisasi Undang-Undang Nomor 14
                            Tahun 2008 tentang Keterbukaan Informasi Publik yang mewajibkan seluruh badan publik untuk
                            dapat mengelola informasi publik guna mewujudkan penyelenggaraan negara yang baik,
                            transparan, efektif dan efisien...
                        </p>
                        <a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/sambutan-ketua"
                            class="btn btn-dark border btn-md">Baca Selengkapnya</a>

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
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb" style="max-height: 250px">
                                <a
                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/membangun-legasi-kejaksaan-yang-lebih-dipercaya-masyarakat"><img
                                        src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/kejatisumut_1699405076453.jpg"
                                        class="img-fluid" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>08</span> Nov, 2023</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4 style="min-height: 85px;max-height: 85px">
                                    <a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/berita/membangun-legasi-kejaksaan-yang-lebih-dipercaya-masyarakat">Membangun
                                        Legasi Kejaksaan Yang Lebih Dipercaya Masyarakat</a>
                                </h4>
                                <p style="min-height: 130px; max-height: 130px">
                                    Membangun Legasi Kejaksaan Yang Lebih Dipercaya Masyarakat
                                </p>
                                <a
                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/membangun-legasi-kejaksaan-yang-lebih-dipercaya-masyarakat">Baca
                                    selanjutnya <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt"></i> 08 Nov 2023</a></li>
                                        <li><a href="#"><i class="fas fa-user"></i> Author</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb" style="max-height: 250px">
                                <a
                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/tim-tabur-kejati-sumut-dan-kejari-medan-amankan-dpo-terpidana-penipuan-rp-27-miliar"><img
                                        src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/kejatisumut_1699405040057.jpg"
                                        class="img-fluid" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>08</span> Nov, 2023</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4 style="min-height: 85px;max-height: 85px">
                                    <a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/berita/tim-tabur-kejati-sumut-dan-kejari-medan-amankan-dpo-terpidana-penipuan-rp-27-miliar">Tim
                                        Tabur Kejati Sumut dan Kejari Medan Amankan DPO Terpidana Penipuan Rp 2,7
                                        Miliar</a>
                                </h4>
                                <p style="min-height: 130px; max-height: 130px">
                                    Tim Tabur Kejati Sumut dan Kejari Medan Amankan DPO Terpidana Penipuan Rp 2,7 Miliar
                                </p>
                                <a
                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/tim-tabur-kejati-sumut-dan-kejari-medan-amankan-dpo-terpidana-penipuan-rp-27-miliar">Baca
                                    selanjutnya <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt"></i> 08 Nov 2023</a></li>
                                        <li><a href="#"><i class="fas fa-user"></i> Author</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb" style="max-height: 250px">
                                <a
                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kasi-penkum-dan-tim-ikuti-workshop-kehumasan-humas-kejaksaan-adalah-jabatan-strategis"><img
                                        src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/kejatisumut_1699405000030.jpg"
                                        class="img-fluid" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>08</span> Nov, 2023</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4 style="min-height: 85px;max-height: 85px">
                                    <a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kasi-penkum-dan-tim-ikuti-workshop-kehumasan-humas-kejaksaan-adalah-jabatan-strategis">Kasi
                                        Penkum dan Tim Ikuti Workshop Kehumasan, Humas Kejaksaan Adalah Jabatan
                                        Strategis</a>
                                </h4>
                                <p style="min-height: 130px; max-height: 130px">
                                    Kasi Penkum dan Tim Ikuti Workshop Kehumasan, Humas Kejaksaan Adalah Jabatan
                                    Strategis
                                </p>
                                <a
                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kasi-penkum-dan-tim-ikuti-workshop-kehumasan-humas-kejaksaan-adalah-jabatan-strategis">Baca
                                    selanjutnya <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt"></i> 08 Nov 2023</a></li>
                                        <li><a href="#"><i class="fas fa-user"></i> Author</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


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
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/ANWAR.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Datuk Rosihan Anwar, S.H.,M.H.</h4>
                                    <span>ASISTEN PERDATA DAN TATA USAHA NEGARA KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Datuk Rosihan Anwar, S.H.,M.H.</h4>
                                                <p>
                                                    -
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/M_SYARIFUDDIN.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Muhammad Syarifuddin, S.H.,M.H.</h4>
                                    <span>Wakil kepala KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Muhammad Syarifuddin, S.H.,M.H.</h4>
                                                <p>
                                                    Wakil kepala KEJATI SUMUT
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202303/asbinfix.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Sukarman Sumarinton, S.H., M.H.</h4>
                                    <span>Asisten Pembinaan KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Sukarman Sumarinton, S.H., M.H.</h4>
                                                <p>
                                                    Asisten Pembinaan KEJATI SUMUT
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/ass6.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>I Made Sudarmawan, S.H., M.H.</h4>
                                    <span>Asisten Intelijen KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>I Made Sudarmawan, S.H., M.H.</h4>
                                                <p>
                                                    Asisten Intelijen KEJATI SUMUT
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202303/aspidumfix.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Luhur Istighfar, S.H., M.Hum.</h4>
                                    <span>Asisten Pidana Umum KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Luhur Istighfar, S.H., M.Hum.</h4>
                                                <p>
                                                    Asisten Pidana Umum KEJATI SUMUT
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/IWAN_GINTING.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Dr. Iwan Ginting, S.H.,M.H</h4>
                                    <span>Asisten Pidana Khusus KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Dr. Iwan Ginting, S.H.,M.H</h4>
                                                <p>
                                                    Asisten Pidana Khusus KEJATI SUMUT
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202303/aspidmilfix.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Kolonel Makmur Surbakti, S.H., M.H.</h4>
                                    <span>Asisten Pidana Militer Kejati Sumut</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Kolonel Makmur Surbakti, S.H., M.H.</h4>
                                                <p>
                                                    Asisten Pidana Militer Kejati Sumut
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202303/aswasfix.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Darmukit, S.H., M.H.</h4>
                                    <span>Asisten Pengawasan KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Darmukit, S.H., M.H.</h4>
                                                <p>
                                                    Asisten Pengawasan KEJATI SUMUT
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202204/ass2.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>Rahmad Isnaini, S.H., M.H.</h4>
                                    <span>KABAG. TU KEJATI SUMUT</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>Rahmad Isnaini, S.H., M.H.</h4>
                                                <p>
                                                    KABAG. TU KEJATI SUMUT
                                                </p>

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
    <section id="event" class="event-area default-padding">
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
                        <a href="{{ route('front_berita') }}"
                            class="btn btn-dark border btn-md">Lihat Semua Berita</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
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
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202205/buron_1.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>SYAHRIZAL, SE</h4>
                                    <span>Tindak Pidana Korupsi</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>SYAHRIZAL, SE</h4>
                                                <p>
                                                <p style="text-align: justify;">Tindak pidana korupsi pada PT. Bhanda
                                                    Ghana Reksa (PERSERO) dalam pelaksanaan kerjasama jasa pembongkaran
                                                    pupuk curah lilik PT. Pupuk Kalimantan Timur di Medan dari kapal
                                                    pengangkutan pengantoran, penyimpanan pemuatan pupuk digudang
                                                    penyimpanan pada periode tahun 2016 s/d 2018.</p>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202303/Tidak_berjudul9_083656.png"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>SELAMAT ANG</h4>
                                    <span>Tindak Pidana Penggelapan</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>SELAMAT ANG</h4>
                                                <p>
                                                <p style="text-align: justify;">Terdakwa Tindak Pidana Penggelapan
                                                    Dalam Proses Pencarian
                                                    .</p>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202205/buron_5.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>JOKO HARYONO ALS. JOKO</h4>
                                    <span>Penipuan</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>JOKO HARYONO ALS. JOKO</h4>
                                                <p>
                                                <p>Tindak Pidana Penipuan</p>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202304/Tidak_berjudul3_082615.png"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>ELLIUS</h4>
                                    <span>Tindak Pidana Korupsi</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>ELLIUS</h4>
                                                <p>
                                                <p style="text-align: justify;">Bahwa ia melakukan Tindak pidana
                                                    Korupsi Kegiatan pengadaan sarana informasi massal tentang harga
                                                    kebutuhan pokok secara elektronik pada Dinas Perindustrian dan
                                                    Perdagangan Kota Medan Tahun 2013 dengan anggaran sebesar Rp.
                                                    3.168.120.000,- (tiga milyar seratus enam puluh delapan juta seratus
                                                    dua puluh ribu rupiah) yang dananya bersumber dari Anggaran
                                                    Pendapatan dan Belanja Daerah (APBD) kota Medan.</p>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="http://kejati-sumaterautara.kejaksaan.go.id/storage/media/202205/buron_3.jpg"
                                    alt="Thumb">
                                <div class="info-title">
                                    <h4>H. HALTATIF, MBA</h4>
                                    <span>Tindak Pidana Korupsi</span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Tentang<br>H. HALTATIF, MBA</h4>
                                                <p>
                                                <p>Tindak pidana korupsi pada pengadaan sewa mobil dinas dan
                                                    operasional&nbsp; PT. Bank Sumut tahun 2013.</p>
                                                </p>

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
