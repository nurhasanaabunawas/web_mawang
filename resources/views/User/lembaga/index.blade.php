<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kelembagaan Kelurahan Mawang</title>
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
                    <li><a class="nav-link scrollto" href="{{ route('user.index') }}">Beranda</a></li>
                    <li class="dropdown"><a href="{{ route('profil.index') }}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#sejarah">Sejarah</a></li>
                            <li><a href="#team">Struktur Pemerintahan</a></li>
                            <li><a href="#tupoksi">Tugas Pokok dan Fungsi</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('layanan.index') }}">Pelayanan</a></li>
                    <li><a class="nav link active" href="{{ route('lembaga.index') }}">Kelembagaan</a></li>
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
                    <h1 data-aos="fade-up">Lembaga Masyarakat Kelurahan Mawang</h1>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ URL::asset('assets/user/assets/img/features-2.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <div class="row">

                <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ URL::asset('assets/user/assets/img/masy.jpg') }}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Lembaga Pemberdayaan Masyarakat</h3>
                            <p>Berdasarkan Peraturan Daerah Nomor 13 Tahun 2006 Tentang Lembaga Kemasyarakatan dan Lembaga Adat menyebutkan bahwa “Pengertian Lembaga Pemberdayaan Masyarakat yang selanjutnya disingkat (LPM) adalah....</p>
                            <a href="{{ route('lpm.index') }}" class="readmore stretched-link mt-auto"><span>Baca Selanjutnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ URL::asset('assets/user/assets/img/polis.jpg') }}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Forum Kemitraan Perpolisian Masyarakat</h3>
                            <p>Menurut Peraturan Kepolisian Negara Republik Indonesia NOMOR 1 TAHUN 2021 Tentang Pemolisian Masyarakat, Forum Kemitraan Polisi Masyarakat yang selanjutnya disingkat FKPM adalah wadah komunikasi antara Polri dan masyarakat...
                            </p>
                            <a href="{{ route('fkpm.index') }}" class="readmore stretched-link mt-auto"><span>Baca Selanjutnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ URL::asset('assets/user/assets/img/family.jpg') }}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Pemberdayaan Kesejahteraan Keluarga</h3>
                            <p>Pemberdayaan Kesejahteraan Keluarga, disingkat PKK, adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Indonesia. PKK terkenal akan "10 program pokok"-nya. <br>
                            </p>
                            <a href="{{ route('pkk.index') }}" class="readmore stretched-link mt-auto"><span>Baca Selanjutnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ URL::asset('assets/user/assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Karang Taruna</h3>
                            <p>Karang Taruna adalah Organisasi Sosial wadah pengembangan generasi muda yang tumbuh dan berkembang atas dasar kesadaran dan tanggung jawab sosial dari, oleh dan untuk masyarakat terutama generasi muda di wilayah desa/kelurahan dan terutama bergerak di bidang...</p>
                            <a href="{{ route('karangtaruna.index') }}" class="readmore stretched-link mt-auto"><span>Baca Selanjutnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ URL::asset('assets/user/assets/img/posyandu.png') }}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Pos Pelayanan Terpadu</h3>
                            <p>Posyandu merupakan salah satu bentuk Upaya Kesehatan Berbasis Masyarakat (UKBM) yang dikelola dan diselenggarakan dari, oleh, untuk dan bersama masyarakat dalam penyelenggaraan pembangunan kesehatan guna memberdayakan masyarakat dan memberikan kemudahan kepada...</p>
                            <a href="{{ route('posyandu.index') }}" class="readmore stretched-link mt-auto"><span>Baca Selanjutnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ URL::asset('assets/user/assets/img/naskun.jpeg') }}" class="img-fluid" alt=""></div>
                            <h3 class="post-title">Usaha Mikro Kecil Menengah</h3>
                            <p>UMKM adalah singkatan dari Usaha Mikro, Kecil dan Menengah. Dalam pelaksanaannya, UMKM menerapkan asas kebersamaan, ekonomi yang demokratis, kemandirian, keseimbangan kemajuan, berkelanjutan, efisiensi keadilan, serta kesatuan ekonomi nasional. Di Indonesia...</p>
                            <a href="{{ route('umkm.index') }}" class="readmore stretched-link mt-auto"><span>Baca Selanjutnya</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Recent Blog Posts Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ route('user.index') }}" class="logo d-flex align-items-center">
                            <img src="{{ URL::asset('assets/user/assets/img/Gowa.png') }}" alt="">
                            <span>Kelurahan Mawang</span>
                        </a>
                        <p>
                            <strong>Kontak Kami</strong><br> Jl. Malino, Kel. Mawang, Kec. Somba Opu, Kabupaten Gowa<br>
                            <strong>Phone:</strong> +6281342294770<br>
                            <strong>Email:</strong> kelurahanmawang94@Gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">


                    </div>

                </div>
            </div>
        </div>

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