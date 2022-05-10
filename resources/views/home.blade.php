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
                        Alhamdulillahirobbilalamin puji serta syukur kami 
                        panjatkan kehadirat Allah SWT, karena atas berkat 
                        limpahan rahmat dan karunia serta hidayah, website 
                        terbaru dari SMPN 41 Bandung dapat diakses untuk 
                        memudahkan informasi serta pembelajaran dari sekolah 
                        kedepannya. Website salah satu media informasi yang 
                        juga mendukungnya dan salah satu penopang content creatif 
                        sekolah sebagai sekolah pusat keunggulan.
                    </p>
                </div>
            </div>
            <img src="{{ asset('img/kepsek-circle.png') }}" alt="Kepala Sekolah">
        </div>
    </div>
    <div class="container-visi-misi">
        
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