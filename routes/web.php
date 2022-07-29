<?php

use App\Http\Controllers\AdminController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/kasir', function () {
    return view('kasir');
});     



// Route::get('/admin', function () {
//     return view('admin');
// });

Route::get('/manager', [AdminController::class, 'index'])->name('manager');

