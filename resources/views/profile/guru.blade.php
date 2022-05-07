@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guru.css') }}">
    @livewireStyles
@endpush
@include('partials/navbar')
@section('layout-container')
    <div class="containerG">
<<<<<<< HEAD
=======
        
>>>>>>> ba6a697df3f3a9625080e0a0e1a50c3492500bab
        <div class="header text-center">
            <h1>Data Guru</h1>
        </div>
            @livewire('search')
        </div>
@endsection
@push('scriptBottom')
    @livewireScripts
@endpush