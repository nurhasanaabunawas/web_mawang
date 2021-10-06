<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profil Kelurahan Mawang</title>
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
                    <li class="dropdown"><a class="nav-link active" href="{{ route('profil.index') }}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
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



    <main id="main">
        <!-- ======= Sejarah Section ======= -->
        <section id="sejarah" class="hero d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Sejarah Kelurahan Mawang</h1>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <h5 data-aos="fade-up" data-aos-delay="200">Kelurahan Mawang, pada awalnya bernama Kampung Buttadidia. Tidak diketahui siapa yang pertama kali memberikan nama Kampung Buttadidia. Namun, yang pasti adalah Mawang diambil dari Bahasa Makassar yang berarti "Terapung". Sebelum
                            berdiri sendiri, Kelurahan Mawang dulunya merupakan bagian dari Kelurahan Tamarunang, tetapi pada tahun 1973 kelurahan ini telah resmi menjadi Kelurahan Mawang. Ada beragam kepercayaan yang dianut oleh masyarakat Kelurahan
                            Mawang, yaitu Islam, Kristen Protestan, Katolik, Hindu, dan Budha dengan mayoritas beragama Islam sehingga sering sering dijumpai masjid yang dijadikan tempat peribadatan. Di kelurahan ini juga terdapat sebuah Danau yang ikonik
                            yang dikenal dengan Danau Mawang, dimana pada sore hari sering dimanfaatkan oleh warga untuk menjala, memancing, dan berolahraga.</h5>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Sejarah -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Struktur Pemerintah Kelurahan Mawang</p>
                </header>

                <div class="row gy-4 d-flex justify-content-center">

                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/babinkamtibnas.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Bhabinkamtibmas</h4><br>
                                <h4>AIPDA Muh. Jufri, S.H.</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/lurah.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Lurah</h4><br>
                                <h4>Iswadi, S.H.</h4>
                                <span>NIP : 19770508 200604 1 010</span></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3  d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/babinsa.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Babinsa</h4><br>
                                <h4>SERTU M. Rahmat</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 d-flex justify-content-center">

                    <div class="col-lg-3 col-md-4 d-flex justify-content-center align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/Fahrudin-removebg-preview.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sekretaris Kelurahan</h4><br><br>
                                <h4>Fachruddin, S.Sos</h4>
                                <span>NIP : 19850929 201101 2 031</span></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 d-flex justify-content-center align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/ira-removebg-preview.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Kepala Seksi Pemerintahan</h4><br>
                                <h4>Ira Darmawanti R., S.E</h4>
                                <span>NIP : 19850929 201101 2 031</span></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-flex justify-content-center align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/mustari-removebg-preview.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Kepala Seksi Ketentraman dan Ketertiban</h4>
                                <h4>Mustari, S.Sos</h4>
                                <span>NIP : 19831006 201001 1 020</span></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-flex justify-content-center align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/tamrin-removebg-preview.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Kepala Seksi Pemberdayaan dan Pelayanan Masyarakat</h4>
                                <h4>Thamrin, S.Sos</h4>
                                <span>NIP : 19690328 199103 1 008</span></div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 d-flex justify-content-center">

                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/Nurul-removebg-preview.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Staff</h4>
                                <h4>Nurul Khalifah</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/Supiani-removebg-preview.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Bendahara</h4>
                                <h4>Supiani, S.M.</h4>
                                <span>NIP : 19710924 201409 2 001</span></div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-3 col-md-3  d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ URL::asset('assets/user/assets/img/kelurahan/haidir-removebg-preview.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Staff</h4>
                                <h4>Muh. Chaidir Ali</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Team Section -->


        <!-- ======= Tupoksi Section ======= -->
        <section id="tupoksi" class="tupoksi">

            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <p>Tugas Pokok dan Fungsi</p>
                </header>
                <div class="row gx-0">

                    <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>LURAH</h2>
                            <p>
                                (1). Kelurahan dipimpin oleh seorang Lurah yang mempunyai tugas pokok memimpin Kelurahan dalam membina, mengkoordinasikan dan melaksanakan kewenangan pemerintahan yang dilimpahkan oleh Bupati di bidang pemerintahan, ketentraman dan ketertiban, ekonomi
                                dan pembangunan, kesejahteraan rakyat, pelayanan masyarakat serta pembinaan Sekretariat Kelurahan. <br> <br>(2). Dalam melaksanakan tugas pokok sebagaimana dimaksud pada ayat (1), Lurah menyelenggarakan
                                fungsi: <br> a. Penyusunan program dan rencana kerja Lurah; <br>b. Penyelenggaraan pemerintahan, pembangunan dan kemasyarakatan; <br>c. Pelaksanaan koordinasi dalam rangka penyeienggaraan pemerintahan pembangunan dan kemasyarakatan;
                                <br> d. Pelaksanaan pembinaan ketentraman dan ketertiban di wilayah kelurahan; <br>e. Pengendalian dan pengkoordinasian seluruh kegiatan unsur organisasi kelurahan; <br> f. Pengawasaan terhadap pelaksanaan program kcrja
                                dan penggunaan anggaran kelurahan.
                            </p>
                            <br>
                            <h2>SEKRETARIS KELURAHAN</h2>
                            <p>
                                (1). Sekretariat Kelurahan dipimpin oleh seorang Sekretaris mempunyai tugas pokok membina, mengkoordinasikan dan melaksanakan kegiatan di bidang ketatausahaan, kepegawaian, perencanaan dan pelaporan, keuangan, serta memberikan pelayanan teknis dan administratif
                                kepada semua unsur dalam lingkup Kelurahan. <br> <br>(2). Dalam melaksanakan tugas pokok sebagaimana dimaksud pada ayat (l) menyelenggarakan fungsi : <br>a. Penyusunan program dan rencana
                                kerja anggaran kelurahan; <br> b. Pelaksanaan kebijakan di bidang kesekretariatan; <br>c. Penyelenggaraan kegiatan di bidang administrasi umum, administrasi kepegawaian, administrasi keuangan dan administrasi perlengkapan
                                serta rumah tangga kelurahan; <br> d. Pengkoordinasian pelaksanaan tugas pokok dan fungsi dengan unsur organisasi kelurahan; <br>e. Pelaksanan pengawasan dan pembinaan pegawai di lingkungan kelurahan; <br> f. Pelaksanaan
                                pelaporan dan evaluasi kegiatan kesekretariatan.
                            </p>
                            <br>
                            <h2>SEKSI PEMERINTAHAN</h2>
                            <p>
                                (1). Kepala Seksi Pemerintahan mempunyai tugas pokok membantu Lurah dalam membina, mengkoordinasikan dan melaksanakan tugas di bidang pemerintahan. <br><br> (2). Dalam melaksanakan tugas pokok sebagaimana dimaksud pada
                                ayat (l) menyelenggarakan fungsi : <br> a. Penyusunan program dan rencana kerja Seksi Pemerintahan; <br>b. Pelaksanaan kewenangan pemerintah yang dilimpahkan oleh Camat kepada Lurah di bidang pemerintahan; <br> c. Penyelenggaraan
                                pemerintahan sesuak dengan yang dihimpahkan oleh Camat kepada Lurah; <br>d. Pelaksanaan koordinasi dalam rangka penyelenggaraan pemerintahan di kelurahan; <br>e. Penyelenggaraan tugas pembantuan tugas lain yang dlberikan
                                sesuai fungsinya.
                            </p>
                            <br>
                            <h2>SEKSI KETENTRAMAN DAN KETERTIBAN</h2>
                            <p>
                                (1). Kepala Seksi Ketentraman dan Ketertiban mempunyai tugas pokok membantu Lurah dalam membina, mengkoordinasikan dan melaksanakan tugas di bidang ketentraman dan ketertiban. <br><br> (2). Dalam melaksanakan tugas pokok
                                sebagaimana dimaksud pada ayat (l), menyelenggarakan fungsi: <br>a. Penyusunan program dan rencana kerja Seksi Ketentraman dan Ketertiban; <br>b. Pelaksanaan kewenangan pemerintah yang dilimpahkan oleh Camat kepada Lurah
                                di bidang ketentraman dan ketertiban; <br> c. Penyelenggaraaan ketentraman dan ketertiban sesuai dengan yang dilimpahkan oleh Camat kepada Lurah; <br>d. Pelaksanaan koordinasi dalam rangka penyelenggaraan ketentraman dan
                                ketertiban di kelurahan; <br> e. Penyelenggaraan tugas pembantuan tugas lain yang diberikan sesuai fungsinya; <br>f. Memantau, mengawasi dan mengevaluasi pelaksanaan tugas dan kegiatan bawahan untuk mengetahui tugas-tugas
                                yang telah dan belum dilaksanakan; <br> g. Melaksanakan evaluasi dan menyusun laporan hasil pelaksanaan kegiatan Seksi Ketentraman dan Ketertiban; <br>h. Dalam melaksanakan tugasnya bertanggungjawab kepada Lurah; <br>i.
                                Melaksanakan tugas lain sesuai dengan kewenangan dan bidang tugas yang diberikan oleh atasan.
                            </p>
                            <br>
                            <h2>SEKSI KETENTRAMAN DAN KETERTIBAN</h2>
                            <p>
                                (1). Kepala Seksi Ketentraman dan Ketertiban mempunyai tugas pokok a. Membantu Lurah dalam mengkoordinasikan, menyiapkan bahan perumusan kebijakan, pelaksanaan, evaluasi dan pelaporan di bidang pemberdayaan dan pelayanan masyarakat. <br><br>(2).
                                Dalam melaksanakan tugas pokok sebagaimana dimaksud pada ayat (l), menyelenggarakan fungsi: <br> a. Menyusun rencana program dan kegiatan Seksi Pemberdayaan dan Pelayanan Masyarakat berdasarkan peraturan perundang-undangan
                                sebagai pedoman dalam pelaksanaan tugas;<br> b. Melaksanakan kegiatan pemberdayaan masyarakat berdasarkan peraturan perundang-undangan agar terjadi efektivitas potensi masyarakat;<br> c. Melaksanakan kegiatan program pendidikan
                                dan kesehatan masyarakat, generasi muda, keolahragaan, kebudayaan, kepramukaan serta peranan wanita berdasarkan ketentuan yang berlaku sehingga dapat menggali semua potensi keberdayaan masyarakat kelurahan;<br> d. Melaksanakan
                                pembinaan dan pengembangan usaha perekonomian rakyat di wilayah kerjanya berdasarkan ketentuan yang berlaku sehingga dapat meningkatkan kesejahteraan masyarakat;<br> e. Melaksanakan pendataan sarana dan prasarana peribadatan,
                                lembaga dan organisasi keagaamaan berdasarkan ketentuan yang berlaku sehingga tersedia data potensi keagaamaan;<br> f. Melaksanakan pembinaan kesejahteraan sosial anak dan usia lanjut berdasarkan peraturan perundang-undangan
                                sehingga dapat meningkatkan kesejahteraan anak dan para usia lanjut;<br> g. Melaksanakan fasilitasi kegiatan organisasi sosial kemasyarakatan, lembaga swadaya masyarakat dan lembaga adat berdasarkan ketentuan sehingga mampu
                                menciptakan keberdayaan masyarakat;<br> h. Melaksanakan pemeliharaan sarana dan prasarana serta fasilitas pelayanan umum berdasarkan standar operasional prosedur dengan maksud agar sarana dan prasarana serta fasilitas umum
                                dapat terjaga dengan baik dan dimanfaatkan oleh masyarakat umum; <br> i. Menyusun laporan hasil pelaksanaan tugas Seksi Pemberdayaan dan Pelayanan Masyarakat dan memberikan saran pertimbangan kepada atasan berdasarkan standar
                                operasional prosedur sebagai bahan perumusan kebijakan;<br> j. Mendistribusikan dan memberi petunjuk pelaksanaan tugas kepada bawahan berdasarkan standar operasional prosedur sehingga pelaksanaan tugas berjalan lancar;
                                <br> k. Mengawasi kinerja bawahan berdasarkan standar operasional prosedur agar pelaksanaan tugas menjadi lebih efektif dan efisien;<br> l. Memeriksa hasil kinerja bawahan sesuai dengan ketentuan agar pelaksanaan tugas
                                lebih optimal;<br> m. Menilai hasil kerja pegawai aparatur sipil negara dalam lingkup Seksi Pemberdayaan dan Pelayanan Masyarakat berdasarkan standar dan prosedur yang berlaku agar pengembangan karier dan peningkatan efektivitas
                                kinerja aparatur sipil negara;<br> n. Membina bawahan dalam lingkup Seksi Pemberdayaan dan Pelayanan Masyarakat sesuai dengan ketentuan agar dapat meningkatkan efisiensi kerja aparatur sipil negara;<br> o. Melaksanakan
                                monitoring dan evaluasi berdasarkan ketentuan sebagai bentuk koordinasi terhadap pihak lain yang terkait dengan tugas dan fungsi;<br> p. Melaksanakan tugas kedinasan lain yang diperintahkan oleh atasan sesuai dengan bidang
                                tugasnya.

                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Tupoksi Section -->
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