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
    return view('home');
});




Route::get('/atasan', function () {
    return view('login');
});


Route::get('/petugas', function () {
    return view('loginpetugas');
});
Route::post('Admin',[loginpost::class,'adminlogin']);
Route::get('Admin',[loginpost::class,'loginpetugas']);

Route::post('Atasan',[loginpost::class,'atasanlogin']);
Route::get('Atasan',[loginpost::class,'login']);

Route::get('logout',[loginpost::class,'logout']);

Route::get('/layar', function () {
    
    return view('layar');
});

Route::get('/anjungan', function () {
    return view('anjungan');
});


Route::get('/InfoAdmin', function () {
    
    return view('Admin/InfoAdmin');
});
Route::get('Info',[DataAdmin::class,'info']);