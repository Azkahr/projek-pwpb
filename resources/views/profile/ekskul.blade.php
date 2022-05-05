@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ekskul.css') }}">
@endpush
@include('partials/navbar')
@section('layout-container')
    <div class="containerE">
        <div class="header">
            <h1 style="color: #0B5E91">Ekstrakurikuler</h1>
            <div class="garis"></div>
        </div>
        <div class="ekskul">
            @foreach ($ekskuls as $ekskul)
                <div class="ekskul-1 mb-3">
                    <h2>{{ $ekskul->nama }}</h2>
                    <img src="{{ Voyager::image($ekskul->image) }}" alt="{{ $ekskul->nama }}.png">
                </div>
            @endforeach
        </div>
    </div>
@endsection