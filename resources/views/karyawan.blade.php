@extends('layouts.frontend')
@section('content')
    <style>
        .profile-card {
            width: 200px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .nav-tabs .nav-link.active {
            background-color: #0d6efd;
            color: #fff;
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
                                <h1>Karyawan & Guru</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="current">Karyawan</li>
                        </ol>
                    </div>
                </nav>
            </div><!-- End Page Title -->

            <!-- Courses Section -->
            <section id="karyawan-section" class="section why-us">
                <!-- Judul hanya ditampilkan sekali -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Karyawan Sekolah</h2>
                    <p>Guru</p>
                </div>

                <!-- Container umum -->

                <!-- Tabs -->
                <!-- Tab Content -->
                <div class="tab-content mt-4">
                    @foreach ($karyawan as $pegawai)
                         <!-- Struktural -->
                    <div class="tab-pane fade show active" id="struktural" role="tabpanel">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div class="profile-card">
                                <img src="{{ asset('storage/karyawan/' . $pegawai->photo) }}" alt=""
                                class="img-fluid rounded mb-2 karyawan-img">
                                <p class="fw-semibold mb-0">{{ $pegawai->nama }}</p>
                                <p class="fw-semibold mb-0">{{ $pegawai->jenis_kelamin }}</p>
                                <p class="fw-semibold mb-0">{{ $pegawai->tugas }}</p>
                                <p class="fw-semibold mb-0">{{ $pegawai->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </section>

        </main>
    </body>
@endsection
