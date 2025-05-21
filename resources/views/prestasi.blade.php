@extends('layouts.frontend')
@section('content')
    <style>
        .prestasi-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .card {
            background-color: #263e8c;
            color: white;
            border-radius: 20px;
            width: 300px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 18px;
            font-weight: bold;
            line-height: 1.4em;
        }

        .prestasi-container .card-text p {
            margin: 4px 0;
            /* Atur jarak antar paragraf */
            line-height: 1.4;
            /* Perkecil tinggi baris jika terlalu renggang */
        }

        .prestasi-container .card-text {
            padding: 10px;

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
                                <h1>Prestasi Sman 1 Baleendah</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="breadcrumbs">
                    <div class="container">
                        <ol>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="current">Prestasi</li>
                        </ol>
                    </div>
                </nav>
            </div><!-- End Page Title -->

            <!-- Courses Section -->
            <section id="prestasi-section" class="section why-us">
                <!-- Judul hanya ditampilkan sekali -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Prestasi Sekolah</h2>
                    <p>Siswa</p>
                </div>

                <!-- Container umum -->
                <div class="container" data-aos="fade-up">
                    <div class="prestasi-container">
                        @foreach ($prestasi as $item)
                            <div class="card">
                                <img src="{{ asset('storage/prestasi/' . $item->photo) }}" alt=""
                                    class="img-fluid rounded mb-2 prestasi-img">
                                <div class="card-text">
                                    <p class="mb-1">
                                        {{ \Carbon\Carbon::parse($item->tgl_prestasi)->translatedFormat('d F Y') }}</p>
                                    <p class="mb-1">{{ $item->nama_prestasi }}</p>
                                    <p class="mb-1">{{ $item->tingkat }}</p>
                                    <p class="mb-1">{!! $item->deskripsi !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

        </main>
    </body>
@endsection
