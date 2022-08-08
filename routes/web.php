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
    return view('welcome');
});


//public pages
Route::get('/about', [App\Http\Controllers\PublicPagesController::class, 'about'])->name('about');
Route::get('/mapping', [App\Http\Controllers\PublicPagesController::class, 'businessMapping'])->name('mapping');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
