@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Semua Artikel</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/berita">Beranda</a></li>
                <li class="current">Artikel</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->
<!-- Slider Section -->

<section id="service-details" class="service-details section">

    <div class="container">
        <div class="row mb-5 mt-3">
            <div class="card my-4">
                <div class="card">
                    <img src="{{ '/storage/'.$artikel[0]->gambar }}" alt="Peringatan Keamanan" class="img-fluid" style="max-height: 400px; object-fit: cover">
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title">
                        <a href="#!" class="text-decoration-none text-dark">{{ $artikel[0]->judul }}</a>
                    </h3>
                    <p>
                        <small class="text-muted">
                            <a href="#!" class="text-decoration-none">{{ $artikel[0]->nama_kategori }}</a> - <span class="text-dark">{{ \Carbon\Carbon::parse($artikel[0]->created_at)->format('j F Y') }}</span>
                        </small>
                    </p>
                    <p class="card-text">
                        {!! Str::limit( $artikel[0]->deskripsi, 150) !!}
                    </p>

                    <a href="{{ route('berita-detail', $artikel[0]->slug) }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            @foreach ($artikel as $item)
            @if ($loop->first) @continue @endif
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card card-effect" style="box-shadow: var(--box-shadow);background-color: #fff;padding: 25px;transition: all 0.35s ease;">
                    <div class="position-absolute bg-dark rounded px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                        <a href="#!" class="text-white text-decoration-none">{{ $item->nama_kategori }}</a>
                    </div>
                    <img src="{{ '/storage/'.$item->gambar }}" alt="Peringatan Keamanan">

                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#!">{{ $item->judul }}</a>
                        </h5>
                        <p>
                            <small class="text-muted">
                                at <span class="text-dark">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</span>
                            </small>
                        </p>
                        <p class="card-text">{!! Str::limit( $item->deskripsi, 150) !!}</p>
                        <a href="{{ route('berita-detail', $item->slug) }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section><!-- /Service Details Section -->

@endsection