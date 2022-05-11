@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengumuman.css') }}">
@endpush
@include('partials/navbar')
@section('layout-container')
<style>
    .container {
        padding: 150px;
    }
</style>
    <div class="container">
        <img src="{{ Voyager::image($announcement->image) }}" width="750" height="450">
        <h1>{{ $announcement->title }}</h1>
        <p>{!! $announcement->body !!}</p>
        <a href="{{ route('pengumuman') }}" class="btn">Kembali</a>
    </div>
@endsection