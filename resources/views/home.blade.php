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
    <div class="container-sejarah">
        <div class="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1652235846122!6m8!1m7!1sCAoSLEFGMVFpcE15R1Y0YVF4VEI2SDMxcDZkX2dINnlXeGZiTlk2ekJrdU5VenVm!2m2!1d-6.915370367182747!2d107.5899976136228!3f72.84112838032318!4f1.696136004351402!5f0.40063701368813043" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="text">
            <p>SEJARAH SINGKAT</p>
            <p>SMPN 41 Bandung</p>
            <div class="content">
                <p>
                    SMP Negeri 41 Bandung merupakan sekolah menengah pertama negeri 
                    yang berada di Kota Bandung, Jawa Barat, Indonesia. Berlokasi di 
                    Jalan Arjuna No.18, Ciroyom, Kec. Andir, Kota Bandung, Jawa Barat. 
                    Masa pendidikan di SMP Negeri 41 Bandung ditempuh dalam waktu tiga 
                    tahun pelajaran, mulai dari kelas VII hingga kelas IX, seperti pada 
                    umumnya masa pendidikan sekolah menengah pertama di Indonesia.
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