@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Detail</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/berita">Artikel</a></li>
                <li class="current">{{ $detail->nama_kategori }}</li>
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
                <h3>{{ $detail->judul }}</h3>
                <img src="{{ '/storage/'.$detail->gambar }}" alt="" class="img-fluid services-img">
                <p>{!! $detail->deskripsi !!}</p>
                
            </div>

        </div>

    </div>

</section><!-- /Service Details Section -->

@endsection