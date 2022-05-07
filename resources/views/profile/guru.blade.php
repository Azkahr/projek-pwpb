@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guru.css') }}">
    @livewireStyles
@endpush
@include('partials/navbar')
@section('layout-container')
    <div class="containerG">
        
        <div class="header text-center">
            <h1>Data Guru</h1>
        </div>
            @livewire('search')
        </div>
@endsection
@push('scriptBottom')
    @livewireScripts
@endpush