@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush
@include('partials/navbar')
@section('layout-container')
<div class="containerN">
        <div class="terkini">
            <div class="berita">
                <div class="garis"></div>
                <h5>Berita terkini</h5>
            </div>
            <div class="latest mt-5">
                @foreach ($latest as $late)
                    <a href="{{ route('detail', $late->id) }}">
                        <div class="d-flex mb-3">
                            <img src="{{ Voyager::image($late->image) }}" alt="">
                            <p style="margin-left: 20px;">{{ $late->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="main">
            @foreach ($posts as $post)
                <img src="{{ Voyager::image($post->image) }}" alt="">
                <p>{{ $post->category->name }} | {{ date('Y-m-d'), strtotime($post->created_at) }}</p>
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->excerpt }}</p>
                <a href="{{ route('detail', $post->id) }}" class="btn" style="margin-bottom: 20px;">Read more</a>
            @endforeach
        </div>
    </div>
@endsection