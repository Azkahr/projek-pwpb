<?php

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
    return view('welcome');
});

Route::get('/posts', function() {
    return view('posts', [
        "posts" => Post::all(),
        "teachers" => Teacher::all()
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
