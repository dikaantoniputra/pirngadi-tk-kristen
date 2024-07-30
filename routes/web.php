<?php

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
    return view('landing.page.index');
});

Route::get('/tk-kristen-pirngadi-layanan', function () {
    return view('landing.page.service');
});

Route::get('/tk-kristen-pirngadi-about', function () {
    return view('landing.page.about');
});

Route::get('/tk-kristen-pirngadi-spp', function () {
    return view('landing.page.spp');
});

Route::get('/tk-kristen-pirngadi-guru', function () {
    return view('landing.page.guru');
});

Route::get('/tk-kristen-pirngadi-foto', function () {
    return view('landing.page.gallery');
});

Route::get('/tk-kristen-pirngadi-kontak', function () {
    return view('landing.page.kontak');
});

