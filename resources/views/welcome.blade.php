{{-- Memberitahu Blade untuk menggunakan layout 'main' --}}
@extends('layouts.main')

{{-- Mengisi 'slot' title --}}
@section('title', 'Homepage')

{{-- Mengisi 'slot' content --}}
@section('content')
    <h1>Selamat Datang di Website Saya!</h1>
    <p>Ini adalah halaman utama (Homepage) yang dibuat dengan Laravel.</p>
@endsection