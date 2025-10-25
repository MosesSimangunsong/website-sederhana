<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
    {{-- Memberitahu Blade untuk menggunakan layout 'main' --}}
    @extends('layouts.main')

    {{-- Mengisi 'slot' title --}}
    @section('title', 'Homepage')

    {{-- Mengisi 'slot' content --}}
    @section('content')
    <h1>Selamat Datang di Website Saya!</h1>
    <p>Ini adalah halaman utama.</p>
    <a href="/about">Pergi ke Halaman About</a>
</body>
</html>