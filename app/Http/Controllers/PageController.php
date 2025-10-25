<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk menampilkan Homepage
    public function home()
    {
        // Ini akan memanggil file 'resources/views/welcome.blade.php'
        return view('welcome');
    }

    // Method untuk menampilkan halaman About
    public function about()
    {
        // Kita akan mengirim data ke view
        $data = [
            'nama' => 'Moses Simangunsong', // Nama Anda
            'pekerjaan' => 'Mahasiswa'
        ];
        
        // Ini akan memanggil file 'resources/views/about.blade.php'
        return view('about', $data);
    }
}