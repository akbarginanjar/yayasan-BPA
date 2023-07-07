@extends('layouts.index')

@section('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <span class="h3 text-warning">Welcome to</span>
            <h1>Yayasan Bakti Purnama <br> Alam (YBPA)</h1>
            <hr>
            <h2>Website ini dirancang untuk memberikan <br> informasi kegiatan yayasan kepada <br> publik, seperti prestasi
                para
                siswa
                dan <br> layanan pendidikan lainnya. </h2>
            {{-- <a href="" class="btn-get-started">Get Started</a> --}}
        </div>
    </section><!-- End Hero -->
@endsection

@section('content')
    <div class="container mt-5 mb-5">
        <h2 class="text-blue"><b> Visi & Misi </b></h2>
        <hr style="width: 100px; height: 4px; border: 0; background: cornflowerblue;">
        <span>
            Pemberdayaan masyarakat berbasis pendidikan, <br>
            membangun generasi muda cerdas ,islami dan berkarakter. <br><br>

            membangun ,mengembangkan kesejahteraan sosial masyarakat sekitar
        </span><br><br>
        <a href="" class="btn text-white me-2" style="background: cornflowerblue;">About Us</a>
        <a href="" class="btn text-white" style="background: cornflowerblue;">Contact Us</a>
    </div>
    <br>
    <div style="background: rgb(0, 128, 98)">
        <div class="container">
            <br><br>
            <center>
                <h2 class="text-white text-center"><b>Kenal lebih dekat dengan pendidikan YBPA</b></h2>
                <span class="text-white text-center">Segera daftarkan putra putri anda di pendidikan YBPA karena metode
                    pembelajarannya berbeda dari yang
                    lain</span>

                {{-- SLIDE --}}
                <br><br>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/banner-1.png') }}" class="d-block w-100" style="border-radius: 15px;"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner-1.png') }}" class="d-block w-100" style="border-radius: 15px;"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner-1.png') }}" class="d-block w-100" style="border-radius: 15px;"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br><br>
            </center>
        </div>
    </div><br><br>
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Prestasi</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="https://man2mojokerto.sch.id/wp-content/uploads/2021/06/IMG-20210626-WA0012-1-1024x577.jpg"
                            class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="course-details.html">Memenangkan setifikat baca-baca</a></h3>
                            <p>20-20-2022</p>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="course-item">
                        <img src="https://man2mojokerto.sch.id/wp-content/uploads/2021/06/IMG-20210626-WA0012-1-1024x577.jpg"
                            class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="course-details.html">Memenangkan setifikat baca-baca</a></h3>
                            <p>20-20-2022</p>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="course-item">
                        <img src="https://man2mojokerto.sch.id/wp-content/uploads/2021/06/IMG-20210626-WA0012-1-1024x577.jpg"
                            class="img-fluid" alt="...">
                        <div class="course-content">

                            <h3><a href="course-details.html">Memenangkan setifikat baca-baca</a></h3>
                            <p>20-20-2022</p>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

            </div>

        </div>
    </section><!-- End Popular Courses Section -->
    <br>
    {{-- BLOG --}}
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Blog</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="https://man2mojokerto.sch.id/wp-content/uploads/2021/06/IMG-20210626-WA0012-1-1024x577.jpg"
                            class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Jumat, 25 Feb 2020</h4>
                            </div>

                            <h3><a href="">#TerraTalks “How to Build a Go-To-Market Strategy As a Product
                                    Manager?”</a></h3>
                            <p>Pada Terra Talks episode kali ini, Fitri Avivah, Product Management at Social Commerce
                                Company akan membagikan pengalam</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <a href="" class="text-warning"><b> Read More </b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="course-item">
                        <img src="https://man2mojokerto.sch.id/wp-content/uploads/2021/06/IMG-20210626-WA0012-1-1024x577.jpg"
                            class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Jumat, 25 Feb 2020</h4>
                            </div>

                            <h3><a href="">#TerraTalks “How to Build a Go-To-Market Strategy As a Product
                                    Manager?”</a></h3>
                            <p>Pada Terra Talks episode kali ini, Fitri Avivah, Product Management at Social Commerce
                                Company akan membagikan pengalam</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <a href="" class="text-warning"><b> Read More </b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="course-item">
                        <img src="https://man2mojokerto.sch.id/wp-content/uploads/2021/06/IMG-20210626-WA0012-1-1024x577.jpg"
                            class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Jumat, 25 Feb 2020</h4>
                            </div>

                            <h3><a href="">#TerraTalks “How to Build a Go-To-Market Strategy As a Product
                                    Manager?”</a></h3>
                            <p>Pada Terra Talks episode kali ini, Fitri Avivah, Product Management at Social Commerce
                                Company akan membagikan pengalam</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <a href="" class="text-warning"><b> Read More </b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

            </div>
            <br>
            <center>
                <a href="" class="btn btn-warning text-white">Lihat Semua</a>
            </center>
        </div>
    </section><!-- End Popular Courses Section -->
    <br><br>
    <div style="background: rgb(0, 128, 98)">
        <div class="container">
            <br><br>
            <center>
                <img src="{{ asset('images/icon.png') }}" width="220px;" alt="">
                <h2 class="text-white"><b>Yayasan Bakti Purnama Alam</b></h2>
                <span class="text-white">Jl. Mengger Hilir No.28, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat
                    40267</span> <br>
                <span class="text-white">No Kontak: 0812-2047-4476</span> <br>
                <span class="text-white">Email: yayasanbaktipurnamaalam@yahoo.com</span>
                <hr style="width: 300px; border: 0; background: gold; height: 3px;">
                <a href="#" class="" style="border-radius: 100%;"><i style="font-size: 30px; color: white;"
                        class="bx bxl-twitter"></i></a>
                <a href="#" class="" style="border-radius: 100%;"><i style="font-size: 30px; color: white;"
                        class="bx bxl-facebook"></i></a>
                <a href="#" class="" style="border-radius: 100%;"><i style="font-size: 30px; color: white;"
                        class="bx bxl-instagram"></i></a>
            </center>
            <br><br>
        </div>
    </div>
@endsection
