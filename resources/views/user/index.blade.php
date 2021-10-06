<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kelurahan Mawang</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('assets/user/assets/img/Gowa.png')}}" rel="icon">
    <link href="{{ URL::asset('assets/user/assets/img/Gowa.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets/user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/user/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets/user/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.6.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('user.index') }}" class="logo d-flex align-items-center">
                <img src="{{ URL::asset('assets/user/assets/img/gowa.png') }}" alt="">
                <h2><strong>Kelurahan Mawang</strong></h2>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('user.index') }}">Beranda</a></li>
                    <li class="dropdown"><a href="{{ route('profil.index') }}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#sejarah">Sejarah</a></li>
                            <li><a href="#team">Struktur Pemerintahan</a></li>
                            <li><a href="#tupoksi">Tugas Pokok dan Fungsi</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('layanan.index') }}">Pelayanan</a></li>
                    <li><a href="{{ route('lembaga.index') }}">Kelembagaan</a></li>
                    <li><a href="{{ route('datapenduduk.index') }}">Data Penduduk</a></li>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang di Website Resmi Kelurahan Mawang, Kecamatan Somba Opu, Kabupaten Gowa</h1>
                    <h2 data-aos="fade-up" data-aos-delay="200">Media komunikasi dan transparansi Pemerintah Kelurahan Mawang kepada seluruh Masyarakat.</h2>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ URL::asset('assets/user/assets/img/kantorlurah.jpeg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>Kondisi Geografis</h2>
                            <p>
                                Mawang adalah salah satu kelurahan di kecamatan Somba Opu, Kabupaten Gowa, Sulawesi Selatan, Indonesia dengan koordinat 5°13’02.3” ─ 5°13’05.9 LS dan 119°29’22.0” ─ 119°30’00.9” BT. Kelurahan Mawang yang memiliki luas 3,99 Km2 ini terdiri dari 2 Wilayah
                                Lingkungan, yaitu Lingkungan Buttadidi dan Lingkungan Biring Balang. Kelurahan ini berbatasan langsung dengan Kelurahan Romang Polong, Kelurahan Bontoramba, Kelurahan Tamarunang, serta Kecamatan Bontomarannu. </p>
                            <div class="text-center text-lg-start">
                                <a href="profil.html" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Profil Kelurahan</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ URL::asset('assets/user/assets/img/PETA MAWANG.webp') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section>
        <!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Galeri Kegiatan Kelurahan Mawang</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ URL::asset('assets/user/assets/img/SembakoJPS.jpeg') }}" class="img-fluid" alt="">
                            <h3>Pembagian Sembako JPS</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ URL::asset('assets/user/assets/img/sampah.jpeg') }}" class="img-fluid" alt="">
                            <h3>Pelatihan Pengelolaan Sampah</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ URL::asset('assets/user/assets/img/Musrenbang.jpeg') }}" class="img-fluid" alt="">
                            <h3>Musyawaran Perencanaan Pembangunan 2021</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <img src="{{ URL::asset('assets/user/assets/img/Posko PPKM.jpeg') }}" class="img-fluid" alt="">
                            <h3>Posko PPKM Mikro Covid-19</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="500">
                            <img src="{{ URL::asset('assets/user/assets/img/Pemberdayaan.jpg') }}" class="img-fluid" alt="">
                            <h3>Sosialisasi Pemberdayaan Masyarakat</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">
                            <img src="{{ URL::asset('assets/user/assets/img/BLT.jpeg') }}" class="img-fluid" alt="">
                            <h3>Pembagian Sembako BLT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Values Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Pelayanan Kelurahan Mawang</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="{{ URL::asset('assets/user/assets/img/hero-img.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="100">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembuatan Surat Pindah Keluar dan Masuk</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembuatan Surat Keterangan Usaha</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembuatan Surat Keterangan Kelahiran</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembuatan Surat Keterangan Tidak Mampu (SKTM)</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembuatan Surat Keterangan Kematian</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembuatan Surat Keterangan Penghasilan</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- / row -->
            </div>

        </section>
        <!-- End Features Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Kontak Kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat Kantor</h3>
                                    <p>Jl. Malino, Kel. Mawang, Kec. Somba Opu, Kabupaten Gowa</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Buka</h3>
                                    <p>Senin - Jum'at<br>08:00AM - 05:00PM</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p>kelurahanmawang94@gmail.com</div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Nomor Telepon</h3>
                                    <p>+6281342294770</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">
                                <img src="{{ URL::asset('assets/user/assets/img/kantorlurah3.jpeg') }}">
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Teknik Informatika</span></strong> - Universitas Hasanuddin 2021.
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets/user/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/user/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ URL::asset('assets/user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/user/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ URL::asset('assets/user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets/user/assets/js/main.js') }}"></script>

</body>

</html>