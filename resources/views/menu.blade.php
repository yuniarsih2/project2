<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')MindSparx.Tch</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/tempt/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/tempt/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="tempt/vendor/aos/aos.css" rel="stylesheet">
    <link href="tempt/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tempt/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="tempt/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="tempt/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="tempt/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="tempt/css/style.css" rel="stylesheet">

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>MindSparx</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Analisis Tingkat Stress</a></li>
                    <li><a class="nav-link scrollto" href="#chatbost">Chatbot</a></li>
                    <li><a class="nav-link scrollto" href="#rps">Rekomendasi Penghilang Stress</a></li>
                    <li><a class="nav-link scrollto" href="#ctc">Cari Teman Cerita</a></li>
                    <li><a class="getstarted scrollto" href="/actionlogout">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Analisis Tingkat Stress</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"> analisis tingkat stres sendiri dengan menjawab
                        pertanyaan dengan opsi Ya/Tidak yang sesuai.
                        Berdasarkan tanggapan pengguna, sistem mengklasifikasikan tingkat stres ke dalam 4 kategori
                        yaitu
                        kategori gangguan mood, Depresi ringan, depresi sedang, dan depresi berat
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="/ats"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="chatbost" class="chatbost">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Chatbot</h3>
                            <p>Chatbot adalah asisten virtual yang menyediakan interaksi antara pengguna dan sistem
                                melalui pesan teks.
                                Pengguna dapat bertanya tentang berbagai topik, dan mendapatkan saran,
                                Setelah memilih topik, pengguna dapat menjelajahi sub topik yang relevan untuk
                                mendapatkan informasi dan rekomendasi
                            </p>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start">
                                    <a href="/cht"
                                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Get Started</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->
        <section id="rps" class="rps">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Rekomendasi Penghilang Stress</p>
                </header>

                <div class="row gy-4" style="display: flex; justify-content: center;">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-info">
                                <p>MindSparx memberikan 5 rekomendasi aktivitas penghilang stres untuk di lakukan oleh
                                    pengguna selama 1 minggu.
                                    Jika pengguna menyelesaikan misi maka sistem akan memberikan kesimpulan atas
                                    kegiatan yang telah di lakukan</p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start">
                                    <a href="/rps"
                                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Get Started</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>


        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="ctc" class="ctc">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Cari Teman Cerita</p>
                </header>

                <div class="row gy-4" style="display: flex; justify-content: center;">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-info">
                                <p>Fitur ini memungkinkan pengguna menemukan teman dengan minat yang sama dan berbagi
                                    cerita serta pengalaman terkait minat, hobi, atau kesehatan mentalnya. Dengan cara
                                    ini,
                                    lingkungan yang menggembirakan tercipta untuk menjaga kesehatan mental Anda</p>
                            </div>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start">
                                    <a href="https://t.me/+Az7-5pfdbpM2NTE1"
                                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Get Started</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>


        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>Selamat datang di Mindsparx Newsletter! Kami hadir kembali dengan berita dan informasi
                            terbaru untuk membantu Anda mengelola stres dan meraih kesejahteraan mental di lingkungan
                            kampus. Dapatkan wawasan, tips, dan saran-saran bermanfaat dari tim kami.</p>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>MindSparx</span>
                        </a>
                        <p>Ikuti kami di media sosial untuk mendapatkan konten-konten yang bermanfaat, tips-tips
                            praktis, dan berita terbaru dari Mindsparx.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="/hero">Analisis Tingkat Stress</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="chatbost">Chatbot</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="rps">Rekomendasi Penghilang
                                    Stress</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="crt">Cari Teman Cerita</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Kampus 2 Politeknik Negeri Subang <br>
                            Subang, Jawa Barat<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 812 2278 3328<br>
                            <strong>Email:</strong> MindSparx@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MindSparx</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">MindSparx</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="tempt/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="tempt/vendor/aos/aos.js"></script>
    <script src="tempt/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="tempt/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="tempt/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="tempt/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="tempt/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="tempt/js/main.js"></script>

</body>

</html>
