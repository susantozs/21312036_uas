<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


// Route::get('/master', function () {
//     return view('layout.master');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tampildata', function () {
    return view('tampildata.index');
});

Route::get('/formtambahdata', function () {
    return view('formtambahdata.index');
});

Route::get('/prosestambahdata', function () {
    return view('prosestambahdata.index');
});

Route::get('/formeditdata', function () {
    return view('formeditdata.index');
});

Route::get('/proseseditdata', function () {
    return view('proseseditdata.index');
});

Route::get('/proseshapusdata', function () {
    return view('proseshapusdata.index');
});