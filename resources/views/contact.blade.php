@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@include('partials/navbar')
@section('layout-container')
    <div class="containerC">
        <div class="header text-center">
            <h1 style="color: #0B5E91;">Hubungi kami</h1>
        </div>
        <div class="contact mb-5">
            <div class="location animasi">
                <div class="component">
                    <img src="{{ asset('img/pin.png') }}" alt="location">
                </div>
                <p>Jalan Arjuna No. 18, Kelurahan Ciroyom, Kecamatan Andir, Bandung 40182, Jawa Barat</p>
            </div>
            <div class="telepon animasi">
                <div class="component">
                    <img src="{{ asset('img/call.png') }}" alt="call">
                </div>
                <p class="mt-2">+62-22-6015864</p>
                <p class="mt-2">+62-22-6015864</p>
            </div>
            <div class="email animasi">
                <div class="component">
                    <img src="{{ asset('img/email.png') }}" alt="email">
                </div>
                <p class="mt-4">smp41bandung@gmail.com</p>
            </div>
            <div class="instagram animasi">
                <div class="component">
                    <img src="{{ asset('img/instagram.png') }}" alt="instagram">
                </div>
                <p class="mt-4">@smpn41bandung1413</p>
            </div>
        </div>
        <div class="map text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7928444531176!2d107.5879030143475!3d-6.9153534696033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6130c1be4bf%3A0x18189ea4bc21198a!2sSPMN%2041%20Bandung!5e0!3m2!1sid!2sid!4v1652000425696!5m2!1sid!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection