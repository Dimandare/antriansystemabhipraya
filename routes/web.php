<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginpost;


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
        "image" => "img/background.png"
 ]);
});
// Route::get('/Admin', function () {
//     return view('Admin', [
//         "image3" => "/img/logo_light.png"
//  ]);
// });



Route::get('/atasan', function () {
    return view('login', [
        "image1" => "/img/background.png",
        "image2" => "/img/logo.png",
 ]);
});


Route::get('/petugas', function () {
    return view('loginpetugas', [
        "image1" => "/img/background.png",
        "image2" => "/img/logo.png"
 ]);
});
Route::post('Admin',[loginpost::class,'inilogin']);

Route::get('Admin',[loginpost::class,'index']);

Route::get('/layar', function () {
    return view('layar', [
        "image1" => "/img/background.png",
        "image2" => "/img/logo.png",
        "video1" => "/video/profil_polres_pati.mp4",
        "video2" => "/video/pancasila.mp4"
 ]);
});

Route::get('/anjungan', function () {
    return view('anjungan', [
        "image1" => "/img/background.png",
        "image2" => "/img/logo.png"
 ]);
});



