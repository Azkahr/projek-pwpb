@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush
@include('partials/navbar')
@section('layout-container')
<style>
    .container {
        padding: 150px;
    }
</style>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        
    </div>
@endsection