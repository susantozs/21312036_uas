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

Route::get('/uas', [UasController::class,'index']);
Route::get('/uas/create', [UasController::class,'create']);
Route::post('/uas', [UasController::class,'store']);
Route::get('/uas/{uas_id}/edit', [UasController::class,'edit']);
Route::put('/uas/{uas_id}', [UasController::class,'update']);
Route::delete('/uas/{uas_id}', [UasController::class,'destroy']);