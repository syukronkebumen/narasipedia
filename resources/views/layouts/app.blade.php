<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="CSIRT Lampung Timur bertanggung jawab atas penanganan insiden keamanan siber di wilayah Kabupaten Lampung Timur. Kami menawarkan layanan pemantauan, tanggapan insiden, analisis, serta edukasi untuk menjaga keamanan informasi pemerintah daerah.">
    <meta name="keywords" content="CSIRT Lampung Timur, keamanan siber, keamanan informasi, tanggapan insiden, pemulihan insiden, analisis keamanan siber, pelatihan keamanan siber, Lampung Timur, keamanan jaringan, cyber security">
    <meta name="author" content="CSIRT Lampung Timur">

    <!-- Open Graph Meta Tags untuk Social Media -->
    <meta property="og:title" content="CSIRT Lampung Timur">
    <meta property="og:description" content="CSIRT Lampung Timur bertanggung jawab atas penanganan insiden keamanan siber di wilayah Kabupaten Lampung Timur. Kami menawarkan layanan pemantauan, tanggapan insiden, analisis, serta edukasi untuk menjaga keamanan informasi pemerintah daerah.">
    <meta property="og:image" content="{{ url('assets/img/logo-csirt-lamtim.png') }}">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <style type="text/css">
        .custom {
            font-size: 12px;
            font-family: Arial;
        }

        .bottomcustom,
        .topcustom {
            font-size: 12px;
            font-family: Arial;
            width: 100%;
        }
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}


    {{-- ##### --}}
    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-csirt-lamtim.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="service-details-page">
    
    {{-- #### --}}
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('assets/img/logo-csirt-lamtim.png') }}" alt="">
                <h1 class="sitename">CSIRT LamTim</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a href="/profil">Profil</a></li>
                    <li><a href="/aduan">Aduan Siber</a></li>
                    <li><a href="/layanan">Layanan</a></li>
                    <li><a href="/berita">Artikel</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                    <li><a href="/panduan">Panduan</a></li>
                    <li><a href="/docs">RFC2350</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer position-relative">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <span class="sitename">CSIRT LamTim</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Komplek Perkantoran Pemeritah</p>
                        <p>Daerah Lampung Timur</p>
                        <p class="mt-3"><strong>No Telp:</strong> <span>+6287 1234 5678</span></p>
                        <p><strong>Email:</strong> <span>csirt@lampungtimurkab.go.id</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/profil">Profil</a></li>
                        <li><a href="/aduan">Aduan Siber</a></li>
                        <li><a href="/layanan">Layanan</a></li>
                        <li><a href="/berita">Artikel</a></li>
                        <li><a href="/kontak">Kontak</a></li>
                        <li><a href="/docs">RFC2350</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Berita</h4>
                    <p>Berlangganan buletin kami dan dapatkan berita terbaru tentang produk dan layanan kami!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">CSIRT LamTim</strong><span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="#">diskominfolamtim</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    {{-- #### --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('script')
</body>
<script>
   // Mendapatkan URL saat ini
    var currentUrl = window.location.href;

    // Memeriksa apakah elemen meta 'og:url' sudah ada
    var metaOgUrl = document.querySelector('meta[property="og:url"]');
    var metacanonical = document.querySelector('link[rel="canonical"]');
    if (metacanonical) {
        metacanonical.setAttribute('href', currentUrl);
    }else{
        metaOgUrl = document.createElement('link');
        metaOgUrl.setAttribute('rel', 'canonical');
        metaOgUrl.setAttribute('href', currentUrl);
        document.head.appendChild(metaOgUrl);
    }
    if (metaOgUrl) {
        // Jika meta tag ada, perbarui atribut 'content'
        metaOgUrl.setAttribute('content', currentUrl);
    } else {
        // Jika meta tag tidak ada, buat elemen meta baru
        metaOgUrl = document.createElement('meta');
        metaOgUrl.setAttribute('property', 'og:url');
        metaOgUrl.setAttribute('content', currentUrl);
        document.head.appendChild(metaOgUrl);
    }
    // Select all the links inside the navmenu
    // Select all the links inside the navmenu
    const navLinks = document.querySelectorAll('#navmenu ul li a');

    // Function to set the active class based on the current URL
    function setActiveClass() {
        const currentPath = window.location.pathname; // Get the current path
        let activeSet = false;

        // Loop through each link
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
                activeSet = true;
            } else {
                link.classList.remove('active');
            }
        });

        // If no link matches the current path, set "Beranda" as active
        if (!activeSet) {
            navLinks[0].classList.add('active'); // Assuming "Beranda" is the first link
        }
    }

    // Run the function on page load
    window.onload = setActiveClass;
</script>
</html>