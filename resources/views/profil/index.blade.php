@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Profil</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li class="current">Detail Profil</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Service Details Section -->
<section id="service-details" class="service-details section">

    <div class="container">

        <div class="row gy-5">

            <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                <div class="service-box">
                    <h4>Serices List</h4>
                    <div class="services-list">
                        <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                        <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                        <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Product Management</span></a>
                        <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Graphic Design</span></a>
                        <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Marketing</span></a>
                    </div>
                </div>

                <div class="service-box">
                    <h4>Download Catalog</h4>
                    <div class="download-catalog">
                        <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                        <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                    </div>
                </div>

                <div class="help-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-headset help-icon"></i>
                    <h4>Have a Question?</h4>
                    <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
                    <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
                </div>

            </div> -->

            <div class="col-lg-12 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/freepik-profil.jpeg" alt="" class="img-fluid services-img">
                <h3>Profil LamTim-CSIRT</h3>
                <p><strong>Deskripsi:</strong> CSIRT Lampung Timur adalah tim yang bertanggung jawab atas penanganan insiden keamanan siber di wilayah Kabupaten Lampung Timur. Tim ini dibentuk untuk melindungi infrastruktur informasi pemerintah daerah dan memastikan respon yang cepat dan efektif terhadap setiap ancaman atau insiden keamanan siber yang muncul.</p>

                <p><strong>Tujuan:</strong></p>
                <ul>
                    <li><i class="bi bi-check-circle"></i>Meningkatkan keamanan dan ketahanan siber di lingkungan pemerintahan Kabupaten Lampung Timur.</li>
                    <li><i class="bi bi-check-circle"></i>Memberikan layanan tanggap darurat terhadap insiden keamanan siber.</li>
                    <li><i class="bi bi-check-circle"></i>Mengkoordinasikan respon terhadap insiden keamanan siber dengan instansi terkait.</li>
                    <li><i class="bi bi-check-circle"></i>Mengedukasi pegawai dan masyarakat mengenai praktik keamanan siber yang baik.</li>
                </ul>

                <p><strong>Layanan:</strong></p>
                <ul>
                    <li><i class="bi bi-check-circle"></i>Pemantauan dan deteksi insiden keamanan siber.</li>
                    <li><i class="bi bi-check-circle"></i>Tanggapan dan pemulihan setelah insiden.</li>
                    <li><i class="bi bi-check-circle"></i>Analisis dan investigasi insiden keamanan siber.</li>
                    <li><i class="bi bi-check-circle"></i>Penyuluhan dan pelatihan keamanan siber.</li>
                </ul>

                <p><strong>Visi:</strong> 
                    Visi LamTim-CSIRT adalah “Menjadi garda terdepan dalam melindungi aset
                    informasi dan infrastruktur teknologi dari ancaman siber melalui respons insiden
                    yang cepat, tepat, dan proaktif, serta meningkatkan keamanan digital secara
                    keseluruhan”.
                </p>

                <p><strong>Misi:</strong></p>
                <p>Misi dari LamTim-CSIRT, yaitu :</p>
                <ul>
                    <li><i class="bi bi-check-circle"></i>Mencegah dan Mengurangi Dampak Insiden: Meningkatkan
                        kewaspadaan terhadap ancaman siber dengan proaktif dalam mendeteksi
                        dan mencegah insiden keamanan sebelum terjadi, serta meminimalkan
                        dampak insiden yang sudah terjadi.</li>
                    <li><i class="bi bi-check-circle"></i>Respon Cepat dan Efektif: Menyediakan layanan respons insiden yang
                        cepat dan efisien untuk mengatasi ancaman siber, serta memulihkan sistem
                        dan data dengan cepat setelah terjadi insiden.</li>
                    <li><i class="bi bi-check-circle"></i>Peningkatan Kesadaran dan Kapasitas Keamanan: Memberikan
                        pelatihan dan sosialisasi kepada seluruh pemangku kepentingan mengenai
                        pentingnya keamanan siber dan langkah-langkah pencegahan yang dapat
                        dilakukan.</li>
                    <li><i class="bi bi-check-circle"></i>Kolaborasi dan Koordinasi: Bekerja sama dengan tim keamanan lain, baik
                        di dalam maupun luar organisasi, untuk berbagi informasi dan strategi dalam
                        menangani insiden keamanan siber secara efektif.</li>
                    <li><i class="bi bi-check-circle"></i>Pengembangan Kebijakan dan Prosedur Keamanan: Merumuskan dan
                        mengimplementasikan kebijakan serta prosedur keamanan yang
                        berkelanjutan untuk memastikan perlindungan optimal terhadap aset
                        informasi dan infrastruktur teknologi.</li>
                </ul>
            </div>

        </div>

    </div>

</section><!-- /Service Details Section -->

@endsection