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

Route::get('/', 'App\Http\Controllers\HomeController@home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

require __DIR__ . '/auth.php';

Route::get('/home', 'App\Http\Controllers\HomeController@home');
Route::get('/menu', 'App\Http\Controllers\HomeController@menu');
Route::get('/book', 'App\Http\Controllers\HomeController@booking');
Route::get('/detail', 'App\Http\Controllers\HomeController@detail');
Route::get('/success', 'App\Http\Controllers\HomeController@success');
Route::get('/reserve', 'App\Http\Controllers\HomeController@reserve');
Route::post('/kirim_menu/{menu_price}/{menu_id}', 'App\Http\Controllers\HomeController@addToCheckout');
