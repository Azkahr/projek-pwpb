@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
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
        <img src="{{ Voyager::image($post->image) }}" width="750" height="450">
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </div>
@endsection