@extends('layouts.main')
@push('scriptTop')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endpush
@push('cssTop')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @livewireStyles
@endpush
@include('partials/navbar')
@section('layout-container')
<style>
    .containerG {
        margin-top: 150px;
    }

    .body {
        margin: auto;
    }

    .btn {
        background-color: #0B5E91;
        text-decoration: none;
        color: white;
    }
</style>
    <div class="containerG">
        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
        <div class="header text-center">
            <h1>Data Guru</h1>
        </div>
        
            @livewire('search')
        
        </div>
@endsection
@push('scriptBottom')
    @livewireScripts
@endpush