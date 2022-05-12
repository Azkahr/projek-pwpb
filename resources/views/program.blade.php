@extends('layouts/main')
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/program.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush
@include('partials/navbar')
@section('layout-container')
<div class="pembungkus">
    <div class="program" style="margin-top: 100px;" height="100px">
        <div class="row">
            <div class="col"style="margin-top: 100px; align-self: center; text-align:center;">
                <h1>kenapa harus smpn 41</h1>
                <h1>bandung</h1>
                <p style="margin-left: 10px; margin-top: 20px;">
                <ul style=" margin-top:50px;  list-style-type: none; color: white; font-weight: 600; font-size: larger;">
                    <li>Micro learning Journey</li>
                    <li>Discussion Forum</li>
                    <li>leaderboard</li>
                    <li>Tangible Reward System</li>
                    <li>Content Management System</li>
                    <li>Executive Dashboard</li>
                </ul>
            </div>
            <div class="col">
                <h1>program kami</h1>
                <div class="k" style="background-color: white; height: auto;">
                    <div class="content d-flex" style="margin-bottom: 160px;" >
                        <img width="250px" src="{{ asset('img/foto.webp') }}" alt="gambar">
                        <p style="margin-left: 10px; margin-top: 20px; ">
                            <ul style=" margin-top:50px;   font-size:22px; font-style:semi bold; ">
                            <li>Micro learning Journey</li>
                            <li>Discussion Forum</li>
                            <li>leaderboard</li>
                            <li>Tangible Reward System</li>
                            <li>Content Management System</li>
                            <li>Executive Dashboard</li>
                        </p>
                    </div>
                    <div class="content d-flex mt-5">
                        <p style="margin-left: 10px;">
                            <ul style=" margin-right: 60px; font-size:22px;">
                                <li>Micro learning Journey </li>
                                <li>Discussion Forum</li>
                                <li>leaderboard</li>
                                <li>Tangible Reward System</li>
                                <li>Content Management System</li>
                                <li>Executive Dashboard</li>
                            </ul>
                        </p>
                        <img width="250px" src="{{ asset('img/foto.webp') }}" alt="gambar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection