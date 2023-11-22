@extends('template.FrontTemplate')

@section('konten')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image: url({!! asset('front/img/bg-halaman') !!});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $berita->judul }}</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <div class="item-box">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('file') }}/{{ $berita->file->name }}"
                                            alt="Thumb"></a>
                                    <div class="date">
                                        <h4><span>{{ $berita->created_at->format('d') }}</span>
                                            {{ $berita->created_at->format('M') }}, {{ $berita->created_at->format('Y') }}
                                        </h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        {{ $berita->judul }}
                                    </h3>
                                    <div class="meta">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-user"></i> {{ $berita->user->name }}</a>
                                            </li>
                                            {{-- <li><a href="#"><i class="fas fa-comments"></i> 0 Komentar</a></li> --}}
                                        </ul>
                                    </div>
                                    {!! $berita->content !!}
                                </div>
                                {{-- <div class="post-pagi-area">
                                    <div class="row">
                                        <div class="col-md-6"><a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kasi-penkum-dan-tim-ikuti-workshop-kehumasan-humas-kejaksaan-adalah-jabatan-strategis"><i
                                                    class="fas fa-angle-double-left"></i> Berita Sebelumnya</a></div>
                                        <div class="col-md-6 text-right"><a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/membangun-legasi-kejaksaan-yang-lebih-dipercaya-masyarakat">Berita
                                                Selanjutnya <i class="fas fa-angle-double-right"></i></a></div>
                                    </div>
                                </div>

                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>
                                            0 komentar
                                        </h4>
                                        <div class="comments-list">
                                        </div>
                                    </div>
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Silahkan berkomentar</h4>
                                        </div>
                                        <span id="alert-area"></span>
                                        <form id="komentar"><input type="hidden" name="_token"
                                                value="PtGI11jqBwWdLVQ4eePM2ortq7ePvdJRcXFTPL9L"> <input type="hidden"
                                                name="post_id" value="881">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Name -->
                                                        <input name="name" class="form-control" placeholder="Nama *"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Email -->
                                                        <input name="contact" class="form-control"
                                                            placeholder="Email/Telepon *" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group comments">
                                                        <!-- Comment -->
                                                        <textarea name="content" class="form-control" placeholder="Komentar/Saran"></textarea>
                                                    </div>
                                                    <div class="form-group pull-right">
                                                        <div class="g-recaptcha"
                                                            data-sitekey="6Ldw_rIUAAAAAOHVZMrvP0aw2Ug17AQfxB5S7MSg"></div>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit">Kirim Komentar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
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
                                        <li><a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kategori/1/berita-internal">
                                                Berita Internal <span>579</span></a>
                                        </li>
                                        <li><a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kategori/2/kegiatan">
                                                Kegiatan <span>636</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Start Sidebar Item -->
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Berita Terbaru</h4>
                                </div>

                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/membangun-legasi-kejaksaan-yang-lebih-dipercaya-masyarakat">
                                                <img src="https://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/kejatisumut_1699405076453.jpg"
                                                    alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a
                                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/membangun-legasi-kejaksaan-yang-lebih-dipercaya-masyarakat">Membangun
                                                    Legasi Kejaksaan Yang Lebih Dipercaya Masyarakat</a>
                                            </h5>
                                            <div class="meta">
                                                <i class="fas fa-user"></i><a href="#">Author</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/tim-tabur-kejati-sumut-dan-kejari-medan-amankan-dpo-terpidana-penipuan-rp-27-miliar">
                                                <img src="https://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/kejatisumut_1699405040057.jpg"
                                                    alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a
                                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/tim-tabur-kejati-sumut-dan-kejari-medan-amankan-dpo-terpidana-penipuan-rp-27-miliar">Tim
                                                    Tabur Kejati Sumut dan Kejari Medan Amankan DPO Terpidana Penipuan Rp
                                                    2,7 Miliar</a>
                                            </h5>
                                            <div class="meta">
                                                <i class="fas fa-user"></i><a href="#">Author</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a
                                                href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kasi-penkum-dan-tim-ikuti-workshop-kehumasan-humas-kejaksaan-adalah-jabatan-strategis">
                                                <img src="https://kejati-sumaterautara.kejaksaan.go.id/storage/media/202311/kejatisumut_1699405000030.jpg"
                                                    alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a
                                                    href="https://kejati-sumaterautara.kejaksaan.go.id/berita/kasi-penkum-dan-tim-ikuti-workshop-kehumasan-humas-kejaksaan-adalah-jabatan-strategis">Kasi
                                                    Penkum dan Tim Ikuti Workshop Kehumasan, Humas Kejaksaan Adalah Jabatan
                                                    Strategis</a>
                                            </h5>
                                            <div class="meta">
                                                <i class="fas fa-user"></i><a href="#">Author</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Start Sidebar Item -->
                            <div class="sidebar-item category">
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
                            <!-- End Sidebar Item -->

                            <!-- Start Sidebar Item -->
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Galeri Photo</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
@endsection
