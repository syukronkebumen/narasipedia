@extends('layouts.app')

@section('content')
<section id="hero" class="hero section">
    <div class="hero-bg">
        <img src="https://img.freepik.com/free-photo/hacker-hood-stealing-data-from-server-room-cybercrime-concept_1142-58515.jpg?t=st=1724609119~exp=1724612719~hmac=0ec2ae27442bb53dc14c22a1342cd69db6215d91c54d3f2564f7caf3aed33c07&w=740" alt="">
    </div>
    <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 data-aos="fade-up">CSIRT <span>Lampung Timur</span></h1>
            <p data-aos="fade-up" data-aos-delay="100">CSIRT (Computer Security Incident Response Team) adalah tim yang menangani insiden keamanan siber, memberikan panduan, dan menyediakan sumber daya untuk meningkatkan keamanan dan respons insiden di organisasi<br></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('profil') }}" class="btn-get-started">Selengkapnya</a>
                <a href="/aduan" class="btn-watch-video d-flex align-items-center"><i class="bi bi-exclamation-octagon"></i><span>Lapor Insiden</span></a>
            </div>
        </div>
    </div>
</section><!-- /Hero Section -->

<!-- Featured Services Section -->
{{-- <section id="featured-services" class="featured-services section">

    <div class="container">

        <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <strong class="d-inline-block mb-2 text-primary">World</strong>
                  <h3 class="mb-0">
                    <a class="text-dark" href="#">Featured post</a>
                  </h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_191819c4e41%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_191819c4e41%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
              </div>
            </div>
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <strong class="d-inline-block mb-2 text-success">Design</strong>
                  <h3 class="mb-0">
                    <a class="text-dark" href="#">Post title</a>
                  </h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_191819c4e45%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_191819c4e45%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
              </div>
            </div>
          </div>

    </div>

</section> --}}
<!-- /Featured Services Section -->

<!-- About Section -->
{{-- <section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Siapakah Calon Bupati Lampung Timur Periode 2024 - 2029 Pilihan Anda ?</h2>
        <p>Satu suara bisa membuat perubahan besar. Mari kita pilih pemimpin yang terbaik untuk daerah kita</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
<form id="unique-form" enctype="multipart/form-data" action="{{ route('users.pilih') }}" method="POST">
    @csrf
    <input type="hidden" name="_method" class="form-control">
    <div class="card-group" style="display: block">
        @foreach ($candidates as $candidate)
        <div class="card">
            <h1 align="center">{{$candidate->id}}</h1>
            <img class="card-img-top" src="{{asset('storage/'.$candidate->photo_paslon)}}" alt="Card image cap">
            <div class="card-body">
                <h5 align="center" class="card-title">{{$candidate->nama_ketua}}</h5>
            </div>
            <div class="form-group" align="center">
                <button name="candidate_id" value="{{$candidate->id}}" class="btn btn-primary">PILIH</button>
            </div>
        </div>
        @endforeach
    </div>
</form>
</div>
<a class="btn btn-info" href="{{ route('hasil-polling') }}"><i class="fa fa-pie-chart" aria-hidden="true"></i> Lihat Hasil Polling</a>
</div>
</div>
</section> --}}
<!-- /About Section -->

<!-- Clients Section -->
{{-- <section id="clients" class="clients section">

    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

        </div>

    </div>

</section> --}}
<!-- /Clients Section -->

<!-- Features Section -->
<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Berita Terbaru</h2>
        <p>Terus update dengan berita terbaru! Dapatkan informasi terkini di sini.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row mb-2">
            @foreach ($artikel as $item)
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">{{ $item->nama_kategori }}</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">
                                {{ Str::limit($item->judul, 35); }}
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</div>
                        <p class="card-text mb-auto">
                            {!! Str::limit( $item->deskripsi, 91) !!}
                        </p>
                        <a href="{{ route('berita-detail', $item->slug) }}">Baca selengkapnya</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="{{ '/storage/'.$item->gambar }}" data-holder-rendered="true" style="width: 200px; height: 250px;">
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section><!-- /Features Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi kami untuk informasi lebih lanjut atau bantuan.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Alamat</h3>
                    <p>Komplek Perkantoran Pemerintah Daerah Lampung Timur</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Kontak</h3>
                    <p>+6287 1234 5678</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>csirt@lampungtimurkab.go.id</p>
                </div>
            </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49596.63572812957!2d105.47558337360482!3d-5.046100121786304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40909806a969bf%3A0xe859e794183b7811!2sDinas%20Kominfo%20Kabupaten%20Lampung%20Timur!5e1!3m2!1sen!2sid!4v1724481543981!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->

@endsection