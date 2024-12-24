<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


Route::get('/dashboard',[Admin::class,'dashboard'])->name('dashboard');
Route::post('/reg',[Admin::class,'registration']);

Route::post('/log',[Admin::class,'login'])->name('login');
