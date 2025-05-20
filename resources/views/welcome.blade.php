@extends('layouts.frontend')
@section('content')
    <section id="home-section" class="hero section dark-background">

        <img src="{{ asset('front/img/sman1.jpg') }}" alt="Sman 1 Baleendah"
            style="width: 100%; height: auto; object-fit: contain;" class="img-fluid">


        <style>
            .hero-header {
                background-image: url('{{ asset('front/img/sman1.jpg') }}');
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center top;
                height: 100vh;
            }
        </style>

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang<br>Di Sman 1 Baleendah</h2>
        </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="" class="about section">
        <div class="container">
            <div class="row align-items-center"> <!-- Tambahkan row dan align-items-center untuk vertikal tengah -->

                <!-- Kolom Gambar -->
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('front/img/sman1bale.jpg') }}" class="img-fluid" alt="">
                </div>

                <!-- Kolom Teks -->
                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Profil Sman 1 Baleendah</h3>
                    <h4><b>Sman 1 Baleendah</b></h4>
                    <ul>
                        <li>Merupakan salah satu Sekolah Menengah Atas Negeri yang ada di Provinsi Jawa Barat, Indonesia.
                            Sama dengan SMA pada umumnya di Indonesia masa pendidikan sekolah di Sma negeri 1 Baleendah
                            ditempuh
                            dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Didirikan pada tahun 1975
                        </li>

                        <li> Pada tahun 2007, sekolah ini menggunakan Kurikulum Tingkat Satuan Pendidikan sebelumnya dengan
                            KBK. Pada tahun 2013 sekolah ini kembali berganti kurikulum menjadi Kurikulum 2013. Sesuai
                            dengan kebijakan Pemerintah, pada tahun 2009, Sma Negeri 1 Baleendah ditunjuk menjadi Rintisan
                            Sekolah Bertaraf Internasional (RSBI) dan mengadopsi Sistem Manajemen Mutu 2008, serta
                            menjalin kerjasama dengan beberapa sekolah.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Counts Section --> <!-- Why Us Section -->
    <section id="informasi-section" class="section why-us">
        <div class="container section-title" data-aos="fade-up">
            <h2>Tentang Sekolah</h2>
            <p>Artikel</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 justify-content-end">
                @foreach ($informasi as $info)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center text-end">
                            <img src="{{ asset('storage/informasi/' . $info->photo) }}" alt=""
                                class="img-fluid rounded mb-2 informasi-img">
                            <h4>{{ $info->judul }}</h4>
                            <p>{!! Str::limit($info->deskripsi, 150) !!}</p>
                            <p>
                                <a href="{{ route('detailInformasi', $info->id) }}"
                                    class="btn btn-warning">Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <style>
                .icon-box {
                    border: 1px solid #ccc;
                    /* Optional, untuk garis kotak */
                    padding: 10px;
                    text-align: right;
                    width: 100%;
                    /* Pastikan full di dalam col */
                }

                .icon-box {
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
                    background-color: #fff;
                    text-align: center;
                }

                .informasi-img {
                    width: 100%;
                    /* Gambar akan mengisi seluruh lebar kotak */
                    height: 200px;
                    /* Ubah sesuai kebutuhan */
                    object-fit: cover;
                    /* Biar gambar nggak gepeng */
                    border-radius: 8px;
                    /* Opsional, biar agak halus */
                }
            </style>
        </div>

        </div>

        </div>

    </section><!-- /Why Us Section -->
    <!-- Features Section -->
    <section id="prestasi-section" class="features section">

        <div class="container">



        </div>

    </section><!-- /Features Section -->
    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

        <div class="container">

            <div class="row team">
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member w-100">
                        <img src="{{ asset('front/img/kepalasekolah.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>H. Dudi Rohdiana, S.pd.,M.M.</h4>
                            <span>Kepala Sekolah</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member w-100">
                        <img src="{{ asset('front/img/wakasek1.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Dadang Sofyan, S.pd.,M.Pd.</h4>
                            <span>Wakasek Bidang Kesiswaan</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member w-100">
                        <img src="{{ asset('front/img/kurikulum.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Erna Kusuma Herliana S.pd</h4>
                            <span>Kurikulum</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <style>
                    .team .member img {
                        object-fit: cover;
                        width: 100%;
                        height: 300px;
                        /* Sesuaikan tinggi */
                        border-radius: 8px;
                    }
                </style>

            </div>


        </div>

    </section><!-- /Trainers Index Section -->
@endsection
