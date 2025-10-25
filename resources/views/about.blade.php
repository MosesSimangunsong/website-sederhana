<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami</title>
</head>
<body>
  @extends('layouts.main')

  @section('title', 'Tentang Kami')

  @section('content')
    <h1>Tentang Saya</h1>

    <p>Halo, nama saya adalah <strong>{{ $nama }}</strong>.</p>
    <p>Saya adalah seorang {{ $pekerjaan }}.</p>

    <a href="/">Kembali ke Homepage</a>
</body>
</html>