<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\GuruController;
use App\Models\Ekstrakurikuler;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Post;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

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
    ]);
});

Route::get('/posts', function() {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all(),
        "ekskuls" => Ekstrakurikuler::all(),
        "teachers" => Teacher::all()
    ]);
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('detail');

Route::get('/guru', [GuruController::class, 'index'])->name('guru');

Route::get('/ekstrakurikuler', [EkskulController::class, 'index'])->name('ekskul');

Route::get('/contact', function() {
    return view('profile.contact', [
        "title" => "Contact"
    ]);
})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
