<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UMKM-Kelembagaan Kelurahan Mawang</title>
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
                    <li>UMKM</li>
                </ol>
                <h2>Usaha Menengah Kecil Mikro</h2>

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
                                <img src="{{ URL::asset('assets/user/assets/img/naskun.jpeg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a>Apa itu UMKM?</a>
                            </h2>

                            <div class="entry-content">
                                <p>
                                UMKM adalah singkatan dari Usaha Mikro, Kecil dan Menengah. Dalam pelaksanaannya, UMKM menerapkan asas kebersamaan, ekonomi yang demokratis, kemandirian, keseimbangan kemajuan, berkelanjutan, efisiensi keadilan, serta kesatuan ekonomi nasional. Di Indonesia, hari UMKM Nasional diperingati setiap tanggal 31 Maret. 
                                UMKM adalah usaha kerakyatan yang saat ini mendapat perhatian dan keistimewaan yang diamanatkan oleh undang-undang, antara lain bantuan kredit usaha dengan bunga rendah, kemudahan persyaratan izin usaha, bantuan pengembangan usaha dari lembaga pemerintah, serta beberapa kemudahan lainnya. 
                                Bidang-bidang UMKM beragam mulai dari fashion, kuliner, kerajinan hingga pertanian.</p>
                                <blockquote>
                                    <p>
                                        Berikut adalah list UMKM di Kelurahan Mawang :
                                    </p>
                                </blockquote>
                                <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Bidang Usaha</th>
                                <th>Alamat Usaha</th>
                                <th>No. HP</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Jual Minuman Dingin</td>
                                        <td>JL. POROS MALINO BUTTADIDI</td>                                        
                                        <td>081 356 321 662	</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Menjahit / Anti Taylor</td>
                                        <td>Jl. Malino Buttadidi</td>                                        
                                        <td>085 348 255 926</td>
                                    </tr>
                                     <tr>
                                        <td>3.</td>
                                        <td>Jual Kue</td>
                                        <td>Jl.Malino Biring-Balang</td>                                        
                                        <td>081 342 654 182	</td>
                                    </tr>
                                     <tr>
                                        <td>4.</td>
                                        <td>Bengkel Motor</td>
                                        <td>Jl. Damai 1 Biring-Balang</td>                                        
                                        <td>082 188 463 074</td>
                                    </tr>
                                     <tr>
                                        <td>5.</td>
                                        <td>Menjahit</td>
                                        <td>Jl. Damai 1 Biring-Balang</td>                                        
                                        <td>081 355 656 773</td>
                                    </tr>
                                     <tr>
                                        <td>6.</td>
                                        <td>Barang Campuran</td>
                                        <td>Jl. Damai 1 Biring-Balang</td>                                        
                                        <td>085 398 050 708</td>
                                    </tr>
                                     <tr>
                                        <td>7.</td>
                                        <td>Bengkel</td>
                                        <td>Jl. Damai 1 Biring-Balang</td>                                        
                                        <td>085 397 533 752</td>
                                    </tr>
                                     <tr>
                                        <td>8.</td>
                                        <td>Barang Campuran</td>
                                        <td>Jl. Poros Malino Buttadidi</td>                                        
                                        <td>082 398 611 039</td>
                                    </tr>
                                     <tr>
                                        <td>9.</td>
                                        <td>Menjahit/ Warda Taylor</td>
                                        <td>Jl. Malino No 4 Buttadidi</td>                                        
                                        <td>085 298 372 380</td>
                                    </tr>
                                     <tr>
                                        <td>10.</td>
                                        <td>Burung Walet</td>
                                        <td>Jl. Damai 1 Biring-Balang</td>                                        
                                        <td>082 348 512 361</td>
                                    </tr>
                                     <tr>
                                        <td>11.</td>
                                        <td>Jual Kue</td>
                                        <td>Jl. Damai 1 Biring-Balang</td>                                        
                                        <td>-</td>
                                    </tr>
                                     <tr>
                                        <td>12.</td>
                                        <td>Barang Campuran</td>
                                        <td>Biring-Balang</td>                                        
                                        <td>082 153 924 044</td>
                                    </tr>
                                     <tr>
                                        <td>13.</td>
                                        <td>Jual Kue</td>
                                        <td>Jl. Malino Biring-Balang</td>                                        
                                        <td>083 131 787 622</td>
                                    </tr>
                                     <tr>
                                        <td>14.</td>
                                        <td>Pangkas Rambut</td>
                                        <td>Biring-Balang</td>                                        
                                        <td>085 656 736 917</td>
                                    </tr>
                                     <tr>
                                        <td>15.</td>
                                        <td>Barang Campuran</td>
                                        <td>Biring-Balang</td>                                        
                                        <td>088 758 324 35</td>
                                    </tr>
                                     <tr>
                                        <td>16.</td>
                                        <td>Jual Beli Barang Elektronik</td>
                                        <td>Jl. Poros Malino, Desa Mawang</td>                                        
                                        <td>085 340 323 685</td>
                                    </tr>
                                    <tr>
                                       <td>17.</td>
                                       <td>Jual Kue</td>
                                       <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                       <td>082 310 678 063</td>
                                    </tr>
                                     <tr>
                                        <td>18.</td>
                                        <td>Kuliner (Mie Pangsit Dan Bakso)</td>
                                        <td>Jl. Poros Malino Buttadidi, Kel.Mawang</td>                                        
                                        <td>088 242 581 999</td>
                                    </tr>
                                     <tr>
                                        <td>19.</td>
                                        <td>Kuliner (Gorengan Tahu Isi,Peyek)</td>
                                        <td>Biring-Balang,Kel. Mawang</td>                                        
                                        <td>085 321 490 054</td>
                                    </tr>
                                     <tr>
                                        <td>20.</td>
                                        <td>Jual Sayur Mayur</td>
                                        <td>Jl.Malino,Kel.Mawang</td>                                        
                                        <td>085 217 185 217</td>
                                    </tr>
                                     <tr>
                                        <td>21.</td>
                                        <td>Jual Meubel</td>
                                        <td>Biring-Balang,Kel. Mawang</td>                                        
                                        <td>085 299 726 156</td>
                                    </tr>
                                     <tr>
                                        <td>22.</td>
                                        <td>Barang Campuran</td>
                                        <td>Jl. Malino Biring-Balang,Kel.Mawang</td>                                        
                                        <td>085 256 607 243</td>
                                    </tr>
                                     <tr>
                                        <td>23.</td>
                                        <td>Jual Kue</td>
                                        <td>Jl. Malino Biring-Balang,Kel.Mawang</td>                                        
                                        <td>082 196 962 925</td>
                                    </tr>
                                     <tr>
                                        <td>24.</td>
                                        <td>Jual Sayur Mayur</td>
                                        <td>Biring-Balang,Kel. Mawang</td>                                        
                                        <td>083 138 790 736</td>
                                    </tr>
                                     <tr>
                                        <td>25.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Biring-Balang,Kel. Mawang</td>                                        
                                        <td>085 244 753 118</td>
                                    </tr>
                                     <tr>
                                        <td>26.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                        <td>088246703481</td>
                                    </tr>
                                     <tr>
                                        <td>27.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                        <td>082346826994</td>
                                    </tr>
                                     <tr>
                                        <td>28.</td>
                                        <td>Kuliner Ayam Geprek</td>
                                        <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                        <td>085145981183</td>
                                    </tr>
                                     <tr>
                                        <td>29.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                        <td>085341638278</td>
                                    </tr>
                                     <tr>
                                        <td>30.</td>
                                        <td>Pakaian Dan Makanan Jadi</td>
                                        <td>Biring-Balang,Kel. Mawang</td>                                        
                                        <td>085345556990</td>
                                    </tr>
                                     <tr>
                                        <td>31.</td>
                                        <td>Jual Sayur Dan Buah</td>
                                        <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                        <td>085245672533</td>
                                    </tr>
                                     <tr>
                                        <td>32.</td>
                                        <td>Kuliner</td>
                                        <td>Jl. Malino Km.16 Bring Balang No 75</td>                                        
                                        <td>082399282621</td>
                                    </tr>
                                     <tr>
                                        <td>33.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                        <td>085242706223</td>
                                    </tr>
                                     <tr>
                                        <td>34.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Lingk. Buttadidi, Kel. Mawang</td>                                        
                                        <td>-</td>
                                    </tr>
                                     <tr>
                                        <td>35.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Biring-Balang,Kel. Mawang</td>                                        
                                        <td>082190118407</td>
                                    </tr>
                                     <tr>
                                        <td>36.</td>
                                        <td>Kuliner (Brownies,Roti Dan Donat)</td>
                                        <td>Perum Graha Mawang Asri Blok Ad  3/5</td>                                        
                                        <td>081242249868</td>
                                    </tr>
                                     <tr>
                                        <td>37.</td>
                                        <td>Menjahit</td>
                                        <td>Biring-Balang,Kel. Mawang</td>                                        
                                        <td>082194592478</td>
                                    </tr>
                                     <tr>
                                        <td>38.</td>
                                        <td>Jualan Campuran Dan Pakaian Jadi</td>
                                        <td>Jl.Malino Biring Balang</td>                                        
                                        <td>082348776428</td>
                                    </tr>
                                     <tr>
                                        <td>39.</td>
                                        <td>Jual Kue</td>
                                        <td>Jl. Poros Malino Buttadidi, Kel.Mawang</td>                                        
                                        <td>082157519932</td>
                                    </tr>
                                     <tr>
                                        <td>40.</td>
                                        <td>Jual Barang Kelontong</td>
                                        <td>Buttadidi</td>                                        
                                        <td>081342137308</td>
                                    </tr>
                                     <tr>
                                        <td>41.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Btn Graha Mawang Asri Blk AC1 No.12</td>                                        
                                        <td>082336435573</td>
                                    </tr>
                                     <tr>
                                        <td>42.</td>
                                        <td>Jual Kue</td>
                                        <td>Biring Balang RT 003 RW 003 Kel.Mawang</td>                                        
                                        <td>085341365644</td>
                                    </tr>
                                     <tr>
                                        <td>43.</td>
                                        <td>Bengkel Las</td>
                                        <td>Biring Balang RT 004 RW 004 Kel.Mawang</td>                                        
                                        <td>082157791569</td>
                                    </tr>
                                     <tr>
                                        <td>44.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Biring Balang RT 003 RW 003 Kel.Mawang</td>                                        
                                        <td>083132592591</td>
                                    </tr>
                                     <tr>
                                        <td>45.</td>
                                        <td>Jasa Service Ac Dan Pemasangan Instalasi Listrik Dan Wifi</td>
                                        <td>Btn Graha Mawang Asri Blk AE5 No.1 Kel.Mawang</td>                                        
                                        <td>081354630009</td>
                                    </tr>
                                     <tr>
                                        <td>46.</td>
                                        <td>Jual Makanan Jadi</td>
                                        <td>Jl.Poros Macanda Buttadidi RT001/RW001 Kel.Mawang</td>                                        
                                        <td>082311439453</td>
                                    </tr>
                                     <tr>
                                        <td>47.</td>
                                        <td>Menjahit</td>
                                        <td>Btn Bumi Somba Opu C2 No.05 RT007/RW001 Kel.Mawang</td>                                        
                                        <td>085333143607</td>
                                    </tr>
                                     <tr>
                                        <td>48.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Btn Bumi Somba Opu RT. 007/RW 001 Kel, Mawang</td>                                        
                                        <td>085289673837</td>
                                    </tr>
                                     <tr>
                                        <td>49.</td>
                                        <td>Jual Pakaian Jadi</td>
                                        <td>Biring Balang RT.005/RW.004 Kel. Mawang</td>                                        
                                        <td>081241809717</td>
                                    </tr>
                                     <tr>
                                        <td>50.</td>
                                        <td>Jual Barang Campuran Dan Makanan Jadi</td>
                                        <td>Buttadidi, RW. 001/RT. 001 Kel, Mawang</td>                                        
                                        <td>085240276487</td>
                                    </tr>
                                     <tr>
                                        <td>51.</td>
                                        <td>Jual Beli Pasir</td>
                                        <td>Buttadidi, RT. 010/RW. 001 Kel, Mawang</td>                                        
                                        <td>082344039050</td>
                                    </tr>
                                     <tr>
                                        <td>52.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Buttadidi, RT. 004/RW. 002 Kel, Mawang</td>                                        
                                        <td>082346121114</td>
                                    </tr>
                                     <tr>
                                        <td>53.</td>
                                        <td>Jual Pakaian Jadi</td>
                                        <td>Jl.Malino Ling.Biringbalang RT002/RW003 Ke.Mawang</td>                                        
                                        <td>083138917367</td>
                                    </tr>
                                     <tr>
                                        <td>54.</td>
                                        <td>Jual Furniture</td>
                                        <td>Buttadidi, RT.007/RW.001 Kel.Mawang</td>                                        
                                        <td>085399761183</td>
                                    </tr>
                                     <tr>
                                        <td>55.</td>
                                        <td>Jual Kue Dan Gas Lpg</td>
                                        <td>Biringbalang RT.004/RW.004 Kel.Mawang</td>                                        
                                        <td>-</td>
                                    </tr>
                                     <tr>
                                        <td>56.</td>
                                        <td>Jual Pakaian Seragam Sekolah</td>
                                        <td>Biringbalang RT.004/RW.004 Kel.Mawang</td>                                        
                                        <td>085321502563</td>
                                    </tr>
                                     <tr>
                                        <td>57.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Jl.Macanda Btn Bumi Somba Opu C1 No.25 Kel.Mawang</td>                                        
                                        <td>-</td>
                                    </tr>
                                     <tr>
                                        <td>58.</td>
                                        <td>Jual Buah-Buahan</td>
                                        <td>Jl.Poros Malino Lingk. Buttadidi Kel.Mawang</td>                                        
                                        <td>085222202314</td>
                                    </tr>
                                     <tr>
                                        <td>59.</td>
                                        <td>Jual Barang Campuran</td>
                                        <td>Buttadidi RT.006/RW.002 Kel.Mawang</td>                                        
                                        <td>082393329063</td>
                                    </tr>
                                     <tr>
                                        <td>60.</td>
                                        <td>Menjahit</td>
                                        <td>Buttadidi RT.005/RW.002 Kel.Mawang</td>                                        
                                        <td>082194082048</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
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