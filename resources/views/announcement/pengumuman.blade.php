@extends('layouts.main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengumuman.css') }}">
@endpush
@include('partials/navbar')
@section('layout-container')
<div class="containerN">
        <div class="terkini">
            <div class="berita">
                <div class="garis"></div>
                <h5>Pengumuman terbaru</h5>
            </div>
            <div class="latest mt-5">
                @foreach ($terkini as $ter)
                    <a href="{{ route('detail-pengumuman', $ter->id) }}">
                        <div class="d-flex mb-3">
                            <img src="{{ Voyager::image($ter->image) }}" alt="">
                            <p style="margin-left: 20px;">{{ $ter->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="main">
            @foreach ($announcements as $announce)
                <img src="{{ Voyager::image($announce->image) }}" alt="">
                <p class="mt-3 text-muted" style="margin: 0">{{ date('Y-m-d'), strtotime($announce->created_at) }}</p>
                <h1>{{ $announce->title }}</h1>
                <p>{{ $announce->excerpt }}</p>
                <a href="{{ route('detail-pengumuman', $announce->id) }}" class="btn" style="margin-bottom: 20px;">Read more</a>
            @endforeach
        </div>
    </div>
@endsection