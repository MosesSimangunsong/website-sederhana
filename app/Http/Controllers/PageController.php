<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk menampilkan Homepage
    public function home()
    {
        // 'welcome' adalah nama file view di resources/views/welcome.blade.php
        return view('welcome');
    }

    // Method untuk menampilkan halaman About
    public function about()
    {
        // Kita akan mengirim data ke view
        $data = [
            'nama' => 'Moses Romulus', // Ganti dengan nama Anda
            'pekerjaan' => 'Mahasiswa'
        ];
        
        // 'about' adalah nama file view di resources/views/about.blade.php
        // Kita juga mengirimkan variabel $data ke view
        return view('about', $data);
    }
}