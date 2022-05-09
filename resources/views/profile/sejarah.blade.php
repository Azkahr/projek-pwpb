@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sejarah.css') }}">
@endpush
@include('partials/navbar')
@section('layout-container')
    <div class="containerS">
        <div class="tentang-container">
            <div class="tentang">
                <h1>Tentang SMPN 41 Bandung</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur perferendis earum reiciendis, molestias neque ipsum ut inventore tempore quos minus similique, id quibusdam optio atque dolor illo harum ducimus fuga repudiandae voluptas vero corporis? Cum minima, odio earum dolorem expedita, dolor corrupti rem, temporibus quam blanditiis ut. Vel, ut consectetur?</p>
            </div>
            <div class="image-tentang text-center">
                <img src="{{ asset('img/sekolah.jpeg') }}" alt="sekolah.jpeg" width="300">
            </div>
        </div>
        <div class="sejarah-container">
            <div class="sejarah">
                <h1>Sejarah SMPN 41 Bandung</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia incidunt, cum ab rerum consectetur autem alias ex, debitis maxime pariatur possimus vero distinctio illum dolor suscipit provident eaque molestiae architecto adipisci ducimus perferendis est dignissimos. Doloribus esse reprehenderit reiciendis, quaerat vero maxime velit? Veritatis praesentium natus corporis nulla, nihil placeat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident reprehenderit accusamus cum sed?</p>
            </div>
            <div class="image-sejarah text-center">
                <img src="{{ asset('img/sekolah.jpeg') }}" alt="sekolah.jpeg" width="300">
            </div>
        </div>
    </div>
@endsection