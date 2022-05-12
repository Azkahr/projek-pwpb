<?php

use TCG\Voyager\Models\Post;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\PengumumanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "news" => Post::latest()->take(3)->get()
    ]);
});

Route::prefix('info')->group(function() {
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('detail');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
    Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('detail-pengumuman');
    Route::get('/program', [ProgramController::class, 'index'])->name('program');
});

Route::prefix('profil')->group(function() {
    Route::get('/guru', [GuruController::class, 'index'])->name('guru');
    Route::get('/ekstrakurikuler', [EkskulController::class, 'index'])->name('ekskul');
    Route::get('/profil', [SejarahController::class, 'index'])->name('profil');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
