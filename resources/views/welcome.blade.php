@extends('layouts.frontend')
@section('content')
    <section id="home-section" class="hero section dark-background">

        <img src="{{ asset('front/img/sman1.jpg') }}" alt="" data-aos="fade-in" style="filter: blur(3px);">

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
                    <h3>Visi Dan Misi</h3>
                    <h4><b>Visi Sman 1 Baleendah</b></h4>
                    <p class="fst-italic">
                        Terwujudnya sekolah Bersih, Berbudaya, Berdaya saing, Berwawasan Global berlandaskan akhlaqul
                        karimah
                    </p>

                    <h4><b>Misi Sman 1 Baleendah</b></h4>
                    <ul>
                        <li>Meningkatkan dan memelihara kebersihan, keindahan, kenyamanan, kesehatan, kerindangan dan
                            kekeluargaan.</li>
                        <li>Penanaman nilai-nilai luhur budaya daerah dan nasional melalui revitalisasi budaya Sunda.</li>
                        <li>Mengembangkan Standar Nasional Pendidikan (SNP) agar memiliki daya saing nasional.</li>
                        <li>Meningkatkan prestasi akademik dan non-akademik melalui mutu pembelajaran.</li>
                        <li>Meningkatkan keterampilan peserta didik melalui “Constructivism Learning” dan interaksi global.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Counts Section --> <!-- Why Us Section -->
    <section id="informasi-section" class="section why-us">

        <div class="container">

            <div class="row gy-4 justify-content-end">
                @foreach ($informasi as $artikel)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center text-end">
                            <img src="{{ asset('storage/informasi/' . $artikel->photo) }}" alt=""
                                style="width: 100px; height: 100px;">
                            <h4>{{ $artikel->judul }}</h4>
                            <p>{!! $artikel->deskripsi !!}</p>
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

    <!-- Courses Section -->
    <section id="eskul-section" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Eskul</h2>
            <p>Ekstrakurikuler</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="{{ asset('front/img/course-1.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Web Development</p>
                                <p class="price">$169</p>
                            </div>

                            <h3><a href="course-details.html">Website Design</a></h3>
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id
                                facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('front/img/trainers/trainer-1-2.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="" class="trainer-link">Antonio</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="course-item">
                        <img src="{{ asset('front/img/course-2.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Marketing</p>
                                <p class="price">$250</p>
                            </div>

                            <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id
                                facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('front/img/trainers/trainer-2-2.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="" class="trainer-link">Lana</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;35
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="course-item">
                        <img src="{{ asset('front/img/course-3.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Content</p>
                                <p class="price">$180</p>
                            </div>

                            <h3><a href="course-details.html">Copywriting</a></h3>
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id
                                facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('front/img/trainers/trainer-3-2.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="" class="trainer-link">Brandon</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;20
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

            </div>

        </div>

    </section><!-- /Courses Section -->

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('front/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Walter White</h4>
                            <span>Web Development</span>
                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ asset('front/img/trainers/trainer-2.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto
                                rerum rerum temporibus
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('front/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et
                                laborum toro des clara
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Trainers Index Section -->
@endsection
