@extends('layouts.frontend')
@section('content')
  <style>
    .bordered-article {
        border: 2px solid #ddd;
        border-radius: 12px;
        padding: 25px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 40px;
    }

    .custom-img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
    }
  </style>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Berita & Artikel Terbaru Sma 1 Baleendah</h1>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="{{url('/')}}">Home</a></li>
              <li class="current">Informasi</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    {{-- @foreach ($informasi as $data) --}}
                        <div class="container">
                            <article class="article bordered-article">
                                <div class="post-img">
                                    <img src="{{ asset('storage/informasi/' . $informasi->photo) }}" alt=""
                                        class="img-fluid custom-img">
                                </div>

                                <h2 class="title">{{ $informasi->judul }}</h2>

                                <div class="meta-top">
                                    <ul>
                                        <p>{!! $informasi->deskripsi !!}</p>
                                    </ul>
                                </div>

                                <div class="content">
                                    <!-- Konten artikel tidak berubah -->
                                </div>

                                <div class="meta-bottom">
                                    <p>
                                        <a href="{{url('/') }}"
                                            class="btn btn-secondary">Kembali</a>
                                    </p>
                                </div>
                                
                            </article>
                        </div>
                    {{-- @endforeach --}}
                </section><!-- /Blog Details Section -->

            </div>
        </div>
    </div>
@endsection
