@extends('layouts.frontend')
@section('content')
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

    <body class="courses-page">

        <main class="main">

            <!-- Page Title -->
            <div class="page-title" data-aos="fade">
                <div class="heading">
                    <div class="container">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-lg-8">
                                <h1>Visi Dan Misi Sman 1 Baleendah</h1>
                                <p class="mb-0"><b>Visi</b></p>
                                <p>Terwujudnya sekolah
                                    Bersih, Berbudaya,Berdaya saing,
                                    Berwawasan Global
                                    berlandaskan akhlaqul karimah
                                </p>
                                <p class="mb-0"><b>Misi</b></p>
                                <ol>
                                    <p>
                                        Meningkatkan dan memelihara kebersihan, keindahan, kenyamanan, kesehatan,
                                        kerindangan, dan kekeluargaan melalui pendidikan dan latihan karakter.
                                    </p>
                                    <p>
                                        Penanaman nilai-nilai luhur budaya daerah dan nasional, pembinaan karakter, dan budi
                                        pekerti bangsa melalui revitalisasi budaya Sunda dan implementasinya dalam
                                        pendidikan.
                                    </p>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="current">Tentang Sekolah</li>
                        </ol>
                    </div>
                </nav>
            </div><!-- End Page Title -->

            <!-- Courses Section -->
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

                </div>

                </div>

                </div>

            </section>
            <!-- /Courses Section -->

        </main>


    </body>
@endsection
