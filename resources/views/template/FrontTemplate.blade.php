<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website informasi untuk Kejati Sumatera Utara">
    <!-- ========== Page Title ========== -->
    <title>CABANG KEJAKSAAN NEGERI DELI SERDANG DI LABUHAN DELI</title>
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
                                Jl. Titi Pahlawan No.1 Martubung
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                labuhandeli.cabjari@gmail.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                061-6851213
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <a target="_blank" href="https://maps.app.goo.gl/mt9j4dRSoiDjgoRXA">
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
                    <img src="{!! asset('front/img/logo-kejaksaan.png') !!}" class="" >
                </div>
                <div class="col text-center visible-xs">
                    <img src="{!! asset('front/img/logo-kejaksaan.png') !!}" class="" >
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

            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->

                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ Route('halaman_utama') }}">
                        <img src="{!! asset('front/img/logo-mini.png') !!}" height="20" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">
                        {{-- {{ App\Models\ }} --}}

                        {{-- <li><a href="{{ Route('sambutan') }}">Sambutan Ketua</a></li>
                        <li><a href="{{ Route('front_berita') }}">Berita</a></li>
                        <li><a href="{{ Route('dpo') }}">DPO</a></li> --}}
                        <?php

                        $category = App\Models\Halaman::all();

                        // dd($category);

                        foreach ($category as $value) {
                            $subhalaman = App\Models\Subhalaman::where('id_halaman', $value->id)->get();
                        ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">{{ $value->nama }}</a>
                            <ul class="dropdown-menu">
                                @foreach ($subhalaman as $data)
                                <?php

                                if ($data->link != "") { ?>
                                <li><a href="{{ $data->link }}">{{ $data->judul }}</a></li>
                                <?php
                                }else { ?>
                                <li><a href="{{ route('subhalaman', $data->slug) }}">{{ $data->judul }}</a></li>
                                <?php
                                }

                                ?>

                                @endforeach
                            </ul>
                        </li>
                        <?php
                        }
                        ?>
                        <li><a href="{{ Route('hubungi') }}">Hubungi</a></li>
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
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <h4>Kontak Kami</h4>
                            <p><i class="fas fa-phone" style="margin-right: 10px"></i> 061-6851213</p>
                            <p><i class="fas fa-home" style="margin-right: 10px"></i> Jl. Titi Pahlawan No. 1
                                Martubung
                            </p>
                            <p><i class="fas fa-envelope" style="margin-right: 10px"></i>labuhandeli.cabjari@gmail.com
                            </p>
                            <p><i class="fas fa-globe" style="margin-right: 10px"></i>
                                {{ route('halaman_utama') }}</p>
                        </div>
                    </div>
                    {{-- <div class="col-md-3 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Statistik Pengunjung</h4>
                            <p>Pengunjung Hari ini : 0</p>
                            <p>Hits hari ini : 0</p>
                            <p>Total pengunjung : 0</p>
                        </div>
                    </div> --}}
                    <div class="col-md-4 col-sm-12 item">
                        <div class="f-item link">
                            <h4>Situs Terkait</h4>
                            <ul
                                style="
                                    height: 200px;
                                    max-height: 200px;
                                    overflow-y: scroll;
                                ">

                                <li><a target="_blank" href="https://sipp.pn-lubukpakam.go.id">Sistem Informasi Penelusuran Perkara Pengadilan Negeri Lubuk Pakam </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Sosial Media</h4>
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/cabjari_labdel/" target="_blank"><i
                                            class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.facebook.com/cabjari.labuhandeli.7" target="_blank"><i
                                            class="fab fa-facebook"></i> </a>
                                    <a href="https://www.youtube.com/@cknlabuhandeli8330" target="_blank"><i
                                            class="fab fa-youtube"></i> </a>
                                    <a href="https://twitter.com/Cabjari_Labdel" target="_blank"><i
                                            class="fab fa-twitter"></i>
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
                        <div class="col-md-8">
                            <p>&copy; Hak Cipta 2023. Semua hak dilindungi oleh <a
                                    href="{{ route('halaman_utama') }}">CABANG KEJAKSAAN NEGERI DELI SERDANG DI LABUHAN
                                    DELI</a></p>
                        </div>
                        <div class="col-md-4 text-right link">
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
            <a class="messanger " href="https://api.whatsapp.com/send?phone=6285361494646" target="_blank">
                <span style="background-color:#4EB625">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <p>Hotline Pelayanan Hukum Pengaduan Masyarakat, Keluhan Tentang Pelayanan, Dugaan Korupsi, Pungli dan
                    gratifikasi, Dan Kritik Dan Saran</p>
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
