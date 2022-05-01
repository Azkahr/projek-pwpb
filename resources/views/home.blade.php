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
            <svg viewBox="0 0 1920 2068" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect id="rect1" x="2032.27" y="91.2251" width="2261.62" height="100" transform="rotate(155.325 2032.27 91.2251)" fill="#0B5E91"/>
                <rect id="rect2" x="-17.5304" y="906" width="2261.62" height="100" transform="rotate(28.3396 -17.5304 906)" fill="#104565"/>
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
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
@endpush