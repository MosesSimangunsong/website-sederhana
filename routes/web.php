<?php

use Illuminate\Support\Facades\Route;
// 1. Impor Controller yang akan kita buat
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 2. Rute untuk Homepage ('/') akan memanggil method 'home' di PageController
Route::get('/', [PageController::class, 'home']);

// 3. Rute untuk '/about' akan memanggil method 'about' di PageController
Route::get('/about', [PageController::class, 'about']);