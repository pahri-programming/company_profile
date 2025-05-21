@extends('layouts.frontend')
@section('content')

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
                @foreach ($prestasi as $item)
                <div class="container section-title" data-aos="fade-up">
                    <h2>Prestasi Sekolah</h2>
                    <p>Siswa</p>
                </div><!-- End Section Title -->
                <div class="container" data-aos="fade-up">
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
                    </style>

                    <div class="prestasi-container">
                        <div class="card">
                            <img src="{{ asset('storage/prestasi/' . $item->photo) }}" alt=""
                            class="img-fluid rounded mb-2 prestasi-img">
                            <div class="card-text">
                               <p>{{$item->tgl_prestas}}</p>
                                <p>{{$item->nama_prestasi}}</p>
                                <p>{{$item->tingkat}}</p>
                                <p>{!!$item->deskripsi!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
        </main>
    </body>
@endsection
