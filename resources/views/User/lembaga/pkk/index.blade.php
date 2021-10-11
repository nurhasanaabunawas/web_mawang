<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PKK-Kelembagaan Kelurahan Mawang</title>
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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('user.index') }}">Beranda</a></li>
                    <li><a href="{{ route('lembaga.index') }}">Kelembagaan</a></li>
                    <li>PKK</li>
                </ol>
                <h2>Pemberdayaan Kesejahteraan Keluarga</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

      <!-- ======= Blog Single Section ======= -->
      <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row d-flex justify-content-center">

                    <div class="col-lg-10 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ URL::asset('assets/user/assets/img/family.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a>Pengertian PKK</a>
                            </h2>

                            <div class="entry-content">
                                <p>
                                    Pemberdayaan Kesejahteraan Keluarga, disingkat PKK, adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Indonesia. PKK terkenal akan "10 program pokok"-nya. <br>
                                    <br>10 Program Pokok PKK pada hakikatnya merupakan kebutuhan dasar manusia, yaitu: <br> 1. Penghayatan dan Pengamalan Pancasila <br> 2. Gotong Royong <br> 3. Pangan <br> 4. Sandang <br> 5. Perumahan dan Tatalaksana
                                    Rumah Tangga <br> 6. Pendidikan dan Keterampilan <br> 7. Kesehatan <br> 8. Pengembangan Kehidupan Berkoperasi <br> 9. Kelestarian Lingkungan Hidup <br> 10. Perencanaan Sehat

                                </p>

                                <h2 class="entry-title">
                                <a>Struktur Organisasi Pemberdayaan Kesejahteraan Keluarga Kelurahan Mawang</a>
                                </h2>
                                <p>
                                    Ketua &nbsp;: <br>
                                    Sekretaris : <br>
                                    Bendahara : <br>
                                    Anggota : <br>
                                </p>

                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Family</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Well-Being</a></li>
                                    <li><a href="#">Program</a></li>
                                    <li><a href="#">Society</a></li>
                                </ul>
                            </div>

                        </article>
                        <!-- End blog entry -->

                    </div>

                </div>
        </section>
        <!-- End Blog Single Section -->


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