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
    <div class="svg-container">
        <div class="bg">
            <svg viewBox="0 0 1920 2448" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="svg1" d="M1936.27 0.264168L1936.27 92.2971L-12.5 1011.15L-12.4999 909.65L1936.27 0.264168Z" stroke="#104565" stroke-width="100"/>
                <path id="svg2" d="M-1.68748 902.937L1920.02 2152.07L1920.32 2274.37L-1.37689 1030.64L-1.68748 902.937Z" fill="#0B5E91"/>
                <path id="svg3" d="M1708.91 2447.59L1647 2369.06L1919.78 2154L1919.78 2269.5L1708.91 2447.59Z" fill="#0084AC"/>
            </svg>
        </div>
    </div>
    <div class="container-sambutan">
        <div class="sambutan" data-aos="fade-up" data-aos-duration="1200">
            <div class="foto">
                <img src="{{ asset('img/kepsek.png') }}" alt="Kepala Sekolah">
            </div>
            <div class="text">
                <p>
                    Assalaamualaikum Warahmatullahi Wabarakatuh.
                </p>
                <p>
                    Alhamdulillahirobbilalamin puji serta syukur kami 
                    panjatkan kehadirat Allah SWT, karena atas berkat 
                    limpahan rahmat dan karunia serta hidayah, website 
                    terbaru dari SMPN 41 Bandung dapat diakses untuk 
                    memudahkan informasi serta pembelajaran dari sekolah 
                    kedepannya. Website salah satu media informasi yang 
                    juga mendukungnya dan salah satu penopang content 
                    creatif sekolah sebagai sekolah pusat keunggulan. 
                </p>
            </div>
        </div>
    </div>
@endsection
@push('scriptBottom')
    <script src="{{ asset('js/paralax.js') }}"></script>
    <script src="{{ asset('js/svg.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
@endpush