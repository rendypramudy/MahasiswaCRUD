<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/',[MahasiswaController::class,'index']);
Route::get('/create',[MahasiswaController::class, 'create']);
Route::post('/store',[MahasiswaController::class, 'store']);
Route::get('/show/{id}',[MahasiswaController::class, 'show']);
Route::post('/update/{id}',[MahasiswaController::class, 'update']);
Route::get('/destroy/{id}',[MahasiswaController::class, 'destroy']);

Route::get('/register',[RegisterController::class,'index']);
Route::POST('/register',[RegisterController::class,'create']);

Route::get('/login', [LoginController::class, 'index']);
Route::POST('/login', [LoginController::class, 'validasi']);


