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
    return view('home');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('shop.index/', function () {
    return view('shop.index');
  });

Route::get('artikel.index/', function () {
    return view('artikel.index');
  });

Route::get('cekkal.index/', function () {
    return view('cekkal.index');
  });

Route::get('konsultasi.index/', function () {
    return view('konsultasi.index');
  });

Route::get('GymTerdekat.index/', function () {
    return view('GymTerdekat.index');
  });

//MOVIE
Route::get('vidtutor.index/', function () {
    return view('vidtutor.index');
  });

Route::get('vidtutor.Tutor1/', function () {
    return view('vidtutor.Tutor1');
  });
  
