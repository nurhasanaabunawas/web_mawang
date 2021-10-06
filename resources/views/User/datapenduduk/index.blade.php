<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Penduduk Kelurahan Mawang</title>
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
                    <li><a href="{{ route('lembaga.index') }}">Kelembagaan</a></li>
                    <li><a class="nav-link active" href="{{ route('datapenduduk.index') }}">Data Penduduk</a></li>
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
                    <h1 data-aos="fade-up">Penduduk Kelurahan Mawang</h1>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ URL::asset('assets/user/assets/img/pddk.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">
            <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="bs-example">
                    <h3 class="card-title">Data Penduduk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>No.</th>
                        <th>Nama</th>
                        <th>Perincian</th>
                        <th>Status Warga</th>
                        <th>Bulan</th>
                        <th>Nama Lingkungan</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Kab/Kota Tujuan</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($penduduk as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nama }}</td>
                          <td>{{ $data->perincian }}</td>
                          <td>{{ $data->status }}</td>
                          <td>{{ $data->bulan }}</td>
                          <td>{{ $data->nama_lingkungan }}</td>
                          <td>{{ $data->jenis_kelamin }}</td>
                          <td>{{ $data->usia }}</td>
                          <td>{{ $data->kota }}</td>
                        </tr>
                      @endforeach
                     
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

            </div>
    </section>
    </main>
                <!-- End Feature Tabs -->


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