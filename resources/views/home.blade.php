@extends('layouts/main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush
@include('partials/navbar')
@section('layout-container')
    <div class="welcome-container">
        <div class="bg">
            <img id="paralax" src="{{ asset('img/sekolah.jpeg') }}" alt="">
        </div>
        <div class="welcome-content">
            <div style="text-align: center">
                <p>SELAMAT DATANG DI SMPN 41 BANDUNG</p>
                <p>“Apresiatif, Religius, Juara, Aman dan Menyenangkan”</p>
            </div>
        </div>
    </div>
    <div class="container-sambutan">
        <div class="container-content">
            <div class="content">
                <div class="header">
                    <p style="text-align: center">SAMBUTAN KEPALA SEKOLAH</p>
                </div>
                <div class="text">
                    <p style="text-align: justify">
                        {{ $components['component_sambutan']->value }}
                    </p>
                </div>
            </div>
            <img src="{{ asset('img/kepsek-circle.png') }}" alt="Kepala Sekolah">
        </div>
    </div>
    <div class="container-sejarah">
        <div class="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1652235846122!6m8!1m7!1sCAoSLEFGMVFpcE15R1Y0YVF4VEI2SDMxcDZkX2dINnlXeGZiTlk2ekJrdU5VenVm!2m2!1d-6.915370367182747!2d107.5899976136228!3f72.84112838032318!4f1.696136004351402!5f0.40063701368813043" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="text">
            <p>SEJARAH SINGKAT</p>
            <p>SMPN 41 Bandung</p>
            <div class="content">
                <p>
                    {{ $components["component_sejarah_singkat"]->value }}
                </p>
            </div>
        </div>
    </div>
    <div class="container-visi-misi">
        <img src="{{ asset('img/visi-misi.png') }}" alt="visi-misi">
    </div>
    <div class="container-data-singkat">
        <img width="100%" height="100%" style="object-fit: contain; image-rendering:optimizeQuality" src="{{ asset('img/data-singkat.png') }}" alt="data-singkat">
    </div>
    {{-- <div class="container-visi-misi">
        <div class="line1">
            <div style="width:55%">
                <svg viewBox="0 0 1052 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1051.33 14C1051.33 6.6362 1045.36 0.666668 1038 0.666667C1030.64 0.666666 1024.67 6.6362 1024.67 14C1024.67 21.3638 1030.64 27.3333 1038 27.3333C1045.36 27.3333 1051.33 21.3638 1051.33 14ZM1038 11.5L2.18557e-07 11.4999L-2.18557e-07 16.4999L1038 16.5L1038 11.5Z" fill="#104565"/>
                </svg>
            </div>
            <img src="{{ asset('img/visi-header.png') }}" alt="visi">
            <img src="{{ asset('img/misi-header.png') }}" alt="misi">
        </div>
        <div class="slider-container">
            <div class="slider">
                <div class="slider-content">
                    <img class="visi-misi-icon" src="{{ asset('img/visi-header.png') }}" alt="visi-logo">
                    <br>
                    <img class="apresiatif-icon" src="{{ asset('img/apresiatif-icon.png') }}" alt="apresiatif icon">
                    <p>Apresiatif</p>
                </div>
            </div>
        </div>
        <div class="line2">
            <div style="width:55%; justify-self:flex-end">
                <svg viewBox="0 0 1207 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.666667 14C0.666666 21.3638 6.6362 27.3333 14 27.3333C21.3638 27.3333 27.3333 21.3638 27.3333 14C27.3333 6.6362 21.3638 0.666668 14 0.666667C6.6362 0.666666 0.666668 6.6362 0.666667 14ZM14 16.5L1207 16.5001L1207 11.5001L14 11.5L14 16.5Z" fill="#104565"/>
                </svg>
            </div>
        </div>
    </div> --}}
    <div class="berita-wrapper">
        <h1 class="text-center">Berita terkini</h1>
        <div class="berita text-center">
            @foreach ($news as $new)
                <div class="berita-terkini">
                    <a href="{{ route('detail', $new->id) }}">
                        <img src="{{ Voyager::image($new->image) }}" alt="" width="300">
                        <h3>{{ $new->title }}</h3>
                        <p>{{ $new->excerpt }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@push('scriptBottom')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush