<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Selamat Datang';
});


Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM:2241720215 & Nama: AGUSTY LABDANAYOGA';
});


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID ".$id;
    });

    Route::get('/user/{name?}', function ($name='John') { return 'Nama saya '.$name;
    });
    
    Route::get('/hello', [WelcomeController::class,'hello']);

    Route::get('/user/{name?}', [PageController::class,'user']);