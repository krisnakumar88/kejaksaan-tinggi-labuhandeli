@extends('template.FrontTemplate')

@section('konten')
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(https://kejati-sumaterautara.kejaksaan.go.id/web/assets/img/kejati/bg-hubungi.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Hubungi Kami</h1>

            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<div class="contact-info-area default-padding">
    <div class="container">
        <div class="row">
            <!-- Start Contact Info -->
            <div class="contact-info">
                <div class="col-md-12 col-sm-6">
                    <div class="item">
                        <div class="icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="info">
                            <h4><a href="https://api.whatsapp.com/send?phone=6285361494646" target="_blank">Chat
                                    Sekarang &gt;&gt;</a></h4>
                            <span>Hotline Pelayanan Hukum Pengaduan Masyarakat, Keluhan Tentang Pelayanan, Dugaan
                                Korupsi, Pungli dan gratifikasi, Dan Kritik Dan Saran</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Info -->

            <div class="seperator col-md-12">
                <span class="border"></span>
            </div>

            <!-- Start Maps & Contact Form -->
            <div class="maps-form">
                <div class="col-md-6 maps">
                    <h3>Lokasi Kami</h3>
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6695.889528435738!2d98.67623318299486!3d3.722691457777708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3036cd6a387a38d9%3A0xfc47dc1fa8bdc9a0!2sCabang%20Kejaksaan%20Negeri%20Lubuk%20Pakam!5e0!3m2!1sid!2sid!4v1700663553692!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 form">
                    <div class="heading">
                        <h3>Kirim Pesan</h3>
                        <p>Pesan anda akan di respon dalam waktu 2x24 Jam di waktu kerja.</p>
                        @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-error" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif
                    </div>
                    <span id="alert-area"></span>
                    <form action="{{ route('pesan') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" name="nama" placeholder="Nama Anda" type="text">
                                    <span class="text-danger name msg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Email*" type="email">
                                    <span class="text-danger email msg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group" id="nomortelp">
                                    <input class="form-control" name="nomortelp" placeholder="No Handphone" type="text">
                                    <span class="text-danger phone msg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <textarea class="form-control" name="pesan"
                                        placeholder="Isi pesan yang ingin disampaikan"></textarea>
                                    <span class="text-danger content msg"></span>
                                </div>
                            </div>
                        </div>
                        <!-- captcha here -->

                        <div class="col-md-12" style="margin-top: 10px;z-index: 9999;">
                            <div class="row">
                                <button type="submit" class="btn-block">
                                    Kirim Pesan <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- End Maps & Contact Form -->

        </div>
    </div>
</div>
@endsection