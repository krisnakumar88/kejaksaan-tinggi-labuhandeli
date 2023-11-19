<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website informasi untuk Kejati Sumatera Utara">
    <!-- ========== Page Title ========== -->
    <title>Kejati Website</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{!! asset('front/img/logo-mini.png') !!}" type="image/x-icon">
    <!-- ========== Start Stylesheet ========== -->
    <link href="{!! asset('front/css/bootstrap.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/font-awesome.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/flaticon-set.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/elegant-icons.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/animate.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/bootsnav.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('front/css/responsive.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/jquery.contactus.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/owl.carousel.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/owl.theme.default.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/magnific-popup.css') !!}" rel="stylesheet" />
    <link href="{!! asset('front/css/custom.css') !!}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>
    <div class="loading">
        <div class="loader"></div>
    </div>
    <!-- Preloader Start -->

    <!-- Preloader Ends -->

    <!-- Start Header Top
============================================= -->
    <div class="top-bar-area address-one-lines bg-kejati text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker"></i>
                                Jl. A.H. Nasution No. 1C Medan
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                Kt.sumut@kejaksaan.go.id
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                061-42786408
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <a target="_blank" href="https://goo.gl/maps/43DrqznTE6yZ4M4J8">
                        <i class="fas fa-map"></i> Lihat di Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- header custom -->
    <div class="header-custom bg-kejati">
        <div class="container">
            <div class="row">
                <div class="col bg-header hidden-xs">
                    <img src="{!! asset('front/img/logo_kejaksaan-removebg.png') !!}" class="" width="100" height="100">
                </div>
                <div class="col text-center visible-xs">
                    <img src="{!! asset('front/img/logo_kejaksaan-removebg.png') !!}" class="" width="100" height="100">
                </div>
            </div>
        </div>
    </div>
    <!-- end header custom -->

    <!-- Main Menu
============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="" method="GET">
                                @csrf
                                <input type="text" name="keyword" class="form-control"
                                    placeholder="Cari berdasarkan judul...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="https://kejati-sumaterautara.kejaksaan.go.id">
                        <img src="http://kejati-sumaterautara.kejaksaan.go.id/web/assets/img/kejati/logo-mini.png"
                            height="20" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Profil</a>
                            <ul class="dropdown-menu">
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/tentang-kami">Tentang
                                        Kami</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/doktrin-adhyaksa">Doktrin
                                        Adhyaksa</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/perintah-harian">Perintah
                                        Harian</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/visi--misi">Visi &
                                        Misi</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/sambutan-ketua">Sambutan
                                        Kepala Kejaksaan Tinggi Sumut</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/kepala-kejaksaan-tinggi-sumut-dari-masa-ke-masa-">Kepala
                                        Kejaksaan Tinggi Sumut Dari Masa ke Masa</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/struktur-organisasi-kejaksaan-tinggi-sumatera-utara">Struktur
                                        Organisasi Kejaksaan Tinggi Sumatera Utara</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/prestasi">Prestasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Sarana</a>
                            <ul class="dropdown-menu">
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/gedung-kantor">Gedung
                                        Kantor</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/pelayanan-terpadu-satu-pintu-ptsp">Pelayanan
                                        Terpadu Satu Pintu (PTSP)</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/aula-sasana-cipta-karya">Aula
                                        Sasana Cipta Karya</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/sentra-diklat">Sentra
                                        Diklat</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/klinik-pratama-rawat-jalan-adhyaksa">Klinik
                                        Pratama Rawat Jalan Adhyaksa</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/fasilitas-umum">Fasilitas
                                        Umum</a></li>
                            </ul>
                        </li>
                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/siaran-pers">Siaran Pers</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Informasi
                                Publik</a>
                            <ul class="dropdown-menu">
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/maklumat-pelayanan">Maklumat
                                        Pelayanan</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/pelayan-informasi-publik">Pejabat
                                        PPID</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/struktur-ppid">Struktur
                                        PPID</a></li>
                                <li><a href="#">Alur Pelayanan Publik</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/sop">SOP</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/undang-undang">Undang -
                                        Undang</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Pelayanan
                                Masyarakat</a>
                            <ul class="dropdown-menu">
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/pengaduan">Pengaduan
                                        Masyarakat</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/info-pemilu-2024">Info
                                        Pemilu 2024</a></li>
                                <li><a href="https://cms-publik.kejaksaan.go.id/">Perkara Tindak Pidana Umum</a></li>
                                <li><a href="https://cms-publik.kejaksaan.go.id/">Perkara Tindak Pidana Khusus</a></li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/berita">Berita</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/pengumuman">Pengumuman</a>
                                </li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/agenda">Agenda</a>
                                </li>
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/dpo">Daftar Pencarian Orang
                                        (DPO)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Reformasi
                                Birokrasi</a>
                            <ul class="dropdown-menu">
                                <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/manajemen-perubahan">Manajemen
                                        Perubahan</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/penguatan-ketatalaksanaan-">Penguatan
                                        Ketatalaksanaan</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/penataan-sistem-manajemen-sdm">Penataan
                                        Sistem Manajemen SDM</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/penguatan-akuntabilitas">Penguatan
                                        Akuntabilitas</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/penguatan-pengawasan">Penguatan
                                        Pengawasan</a></li>
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/peningkatan-kualitas-pelayanan-publik">Peningkatan
                                        Kualitas Pelayanan Publik</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Survei</a>
                            <ul class="dropdown-menu">
                                <li><a
                                        href="https://kejati-sumaterautara.kejaksaan.go.id/halaman/kepuasan-pelayanan-publik">Kepuasan
                                        Pelayanan Publik</a></li>
                                <li><a
                                        href="https://reformasibirokrasi.kejaksaan.go.id/survei/survei_new.php?layanan=HotlinePengaduan&id=006287&key=UI3L6VpdNGNval4rB3TE">Survei
                                        Hotline Pengaduan</a></li>
                                <li><a
                                        href="https://reformasibirokrasi.kejaksaan.go.id/survei/survei_new.php?layanan=SurveyKepuasanLayana&id=006287&key=UI3L6VpdNGNval4rB3TE">Survei
                                        Layanan PTSP</a></li>
                            </ul>
                        </li>
                        <li><a href="https://kejati-sumaterautara.kejaksaan.go.id/hubungi">Hubungi</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Main Menu -->


    @yield('konten')




    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-3 item">
                        <div class="f-item">
                            <h4>Kontak Kami</h4>
                            <p><i class="fas fa-phone" style="margin-right: 10px"></i> 061-42786408</p>
                            <p><i class="fas fa-home" style="margin-right: 10px"></i> Jl. A.H. Nasution No. 1C Medan
                            </p>
                            <p><i class="fas fa-envelope" style="margin-right: 10px"></i> Kt.sumut@kejaksaan.go.id</p>
                            <p><i class="fas fa-globe" style="margin-right: 10px"></i>
                                https://kejati-sumaterautara.kejaksaan.go.id</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Statistik Pengunjung</h4>
                            <p>Pengunjung Hari ini : 0</p>
                            <p>Hits hari ini : 0</p>
                            <p>Total pengunjung : 0</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Situs Terkait</h4>
                            <ul
                                style="
                                    height: 200px;
                                    max-height: 200px;
                                    overflow-y: scroll;
                                ">
                                <li><a target="_blank" href="#">Kejaksaan Negeri Medan </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Karo </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Dairi </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Tapanuli Utara </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Toba Samosir </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Padang Sidimpuan </a></li>
                                <li><a target="_blank"
                                        href="https://kejari-tapanuliselatan.kejaksaan.go.id/">Kejaksaan Negeri
                                        Tapanuli Selatan </a></li>
                                <li><a target="_blank"
                                        href="https://kejari-padanglawasutara.kejaksaan.go.id/">Kejaksaan Negeri Padang
                                        Lawas Utara </a></li>
                                <li><a target="_blank" href="http://kejari-labuhanbatuselatan.go.id/">Kejaksaan Negeri
                                        Labuhan Batu Selatan </a></li>
                                <li><a target="_blank" href="https://kejari-deliserdang.go.id/">Kejaksaan Negeri Deli
                                        Serdang </a></li>
                                <li><a target="_blank" href="https://kejari-simalungun.kejaksaan.go.id/">Kejaksaan
                                        Negeri Simalungun </a></li>
                                <li><a target="_blank" href="https://kejari.langkatkab.go.id/">Kejaksaan Negeri
                                        Langkat </a></li>
                                <li><a target="_blank" href="https://kejari-serdangbedagai.kejaksaan.go.id/">Kejaksaan
                                        Negeri Serdang Bedagai </a></li>
                                <li><a target="_blank"
                                        href="https://kejari-humbanghasundutan.kejaksaan.go.id/">Kejaksaan Negeri
                                        Humbang Hasundutan </a></li>
                                <li><a target="_blank" href="https://kejari-asahan.kejaksaan.go.id/">Kejaksaan Negeri
                                        Asahan </a></li>
                                <li><a target="_blank" href="https://kejari-binjai.go.id/">Kejaksaan Negeri Binjai
                                    </a></li>
                                <li><a target="_blank"
                                        href="https://kejari-pematangsiantar.kejaksaan.go.id/index.html">Kejaksaan
                                        Negeri Pematang Siantar </a></li>
                                <li><a target="_blank" href="https://kejari-sibolga.kejaksaan.go.id/">Kejaksaan Negeri
                                        Sibolga </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Tebing Tinggi </a></li>
                                <li><a target="_blank"
                                        href="https://kejari-tanjungbalaiasahan.kejaksaan.go.id/">Kejaksaan Negeri
                                        Tanjung Balai </a></li>
                                <li><a target="_blank" href="https://kejari-samosir.kejaksaan.go.id/">Kejaksaan Negeri
                                        Samosir </a></li>
                                <li><a target="_blank" href="https://kejari-padanglawas.go.id/">Kejaksaan Negeri
                                        Padang Lawas </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Mandaling Natal </a></li>
                                <li><a target="_blank" href="https://kejari-labuhanbatu.go.id/">Kejaksaan Negeri
                                        Labuhan Batu </a></li>
                                <li><a target="_blank" href="https://kejari-batubara.kejaksaan.go.id/">Kejaksaan
                                        Negeri Batubara </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Gunung Sitoli </a></li>
                                <li><a target="_blank" href="#">Kejaksaan Negeri Nias Selatan </a></li>
                                <li><a target="_blank" href="https://kejari-belawan.kejaksaan.go.id/">Kejaksaan Negeri
                                        Belawan </a></li>
                                <li><a target="_blank" href="#">Cabjari Mandailing Natal di Kota Nopan </a></li>
                                <li><a target="_blank" href="#">Cabjari Karo di Tiga Binanga </a></li>
                                <li><a target="_blank" href="#">Cabjari Taput di Siborongborong </a></li>
                                <li><a target="_blank"
                                        href="https://cabjari-deliserdangdipancurbatu.kejaksaan.go.id/">Cabjari Deli
                                        Serdang di Pancur Batu </a></li>
                                <li><a target="_blank" href="#">Cabjari Toba Samosir di Porsea </a></li>
                                <li><a target="_blank" href="#">Cabjari Mandailing Natal di Natal </a></li>
                                <li><a target="_blank" href="#">Cabjari Deli Serdang di Labuhan Deli </a></li>
                                <li><a target="_blank" href="#">Cabjari Langkat di Pangkalan Brandan </a></li>
                                <li><a target="_blank" href="#">Cabjari Nias Selatan di Pulau Tello </a></li>
                                <li><a target="_blank" href="https://pt-medan.go.id/">Pengadilan Tinggi Medan </a>
                                </li>
                                <li><a target="_blank" href="https://www.pn-medankota.go.id/v3/">Pengadilan Negeri
                                        Medan </a></li>
                                <li><a target="_blank" href="https://www.sumutprov.go.id/">Pemerintah Provinsi
                                        Sumatera Utara </a></li>
                                <li><a target="_blank" href="http://www.sumut.polri.go.id/">Kepolisian Daerah Sumatera
                                        Utara </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 item">
                        <div class="f-item address">
                            <h4>Sosial Media</h4>
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/kejatisumut/"><i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.facebook.com/humaskejatisumut"><i
                                            class="fab fa-facebook"></i> </a>
                                    <a href="https://www.youtube.com/watch?v=lJvyWNkfkKs"><i
                                            class="fab fa-youtube"></i> </a>
                                    <a href="https://www.twitter.com/humaskejatisu"><i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Hak Cipta 2023. Semua hak dilindungi oleh <a
                                    href="{{ route('halaman_utama') }}">KEJATI MEDAN</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->


    <style>
        #hello img {
            position: fixed;
            right: 0;
            bottom: 0;
            /* margin:0;
            padding:0; */
            width: 131px;
            z-index: 999;
        }

        #contact {
            right: 80px;
            bottom: 40px;
            z-index: 9999;
        }
    </style>
    <div id="hello">
        <img src="http://kejati-sumaterautara.kejaksaan.go.id/web/assets/img/kejati/cs.png" alt="">
    </div>

    <div id="contact" class="arcontactus-widget arcontactus-message right lg active">

        <div class="messangers-block lg">
            <a class="messanger " href="https://api.whatsapp.com/send?phone=6281277900190" target="_blank">
                <span style="background-color:#4EB625">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <p>Hotline Pelayanan Hukum Pengaduan Masyarakat dan Pengaduan Mafia Tanah</p>
            </a>
            <a class="messanger " href="https://api.whatsapp.com/send?phone=6282163919367" target="_blank">
                <span style="background-color:#4EB625">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <p>Hotline Sipandu Desa</p>
            </a>
            <a class="messanger " href="https://api.whatsapp.com/send?phone=6282146210553" target="_blank">
                <span style="background-color:#4EB625">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <p>Hotline Unit Pengendalian Gratifikasi</p>
            </a>
        </div>

        <div class="arcontactus-message-button" style="background-color: #ff0000">
            <div class="static">
                <svg width="20" height="20" viewBox="0 0 20 20" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Canvas" transform="translate(-825 -308)">
                        <g id="Vector">
                            <use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"></use>
                        </g>
                    </g>
                    <defs>
                        <path id="path0_fill0123"
                            d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z">
                        </path>
                    </defs>
                </svg>
                <p>Hubungi</p>
            </div>

            <div class="pulsation" style="background-color: #df0000"></div>
            <div class="pulsation" style="background-color: #df0000"></div>
        </div>

    </div>


    <!-- jQuery Frameworks
============================================= -->
    <script src="{!! asset('front/js/jquery-1.12.4.min.js') !!}"></script>
    <script src="{!! asset('front/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('front/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('front/js/dataTables.bootstrap.min.js') !!}"></script>
    <script src="{!! asset('front/js/equal-height.min.js') !!}"></script>
    <script src="{!! asset('front/js/jquery.appear.js') !!}"></script>
    <script src="{!! asset('front/js/jquery.easing.min.js') !!}"></script>
    <script src="{!! asset('front/js/modernizr.custom.13711.js') !!}"></script>
    <script src="{!! asset('front/js/wow.min.js') !!}"></script>
    <script src="{!! asset('front/js/isotope.pkgd.min.js') !!}"></script>
    <script src="{!! asset('front/js/imagesloaded.pkgd.min.js') !!}"></script>
    <script src="{!! asset('front/js/count-to.js') !!}"></script>
    <script src="{!! asset('front/js/loopcounter.js') !!}"></script>
    <script src="{!! asset('front/js/jquery.nice-select.min.js') !!}"></script>
    <script src="{!! asset('front/js/bootsnav.js') !!}"></script>
    <script src="{!! asset('front/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('front/js/jquery.magnific-popup.min.js') !!}"></script>
    <script>
        /* ==================================================
                # Advisor Carousel
                ===============================================*/
        $('.advisor-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        $(".popup-gallery").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            // other options
        });

        $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        $('.magnific-mix-gallery').each(function() {
            var $container = $(this);
            var $imageLinks = $container.find('.item');

            var items = [];
            $imageLinks.each(function() {
                var $item = $(this);
                var type = 'image';
                if ($item.hasClass('magnific-iframe')) {
                    type = 'iframe';
                }
                var magItem = {
                    src: $item.attr('href'),
                    type: type
                };
                magItem.title = $item.data('title');
                items.push(magItem);
            });

            $imageLinks.magnificPopup({
                mainClass: 'mfp-fade',
                items: items,
                gallery: {
                    enabled: true,
                    tPrev: $(this).data('prev-text'),
                    tNext: $(this).data('next-text')
                },
                type: 'image',
                callbacks: {
                    beforeOpen: function() {
                        var index = $imageLinks.index(this.st.el);
                        if (-1 !== index) {
                            this.goTo(index);
                        }
                    }
                }
            });
        });
    </script>
    <script src="{!! asset('front/js/main.js') !!}"></script>
    <script>
        $('.arcontactus-message-button').click(function() {
            var status = $('.messangers-block').hasClass("show-messageners-block");

            if (typeof status === 'boolean' && status === true) {
                $('.messangers-block').removeClass('show-messageners-block');
            } else {
                $('.messangers-block').addClass('show-messageners-block');
            }

        })
    </script>
</body>

</html>
