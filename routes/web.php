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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('pages.aboutus');
})->name('aboutus');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/currency', function () {
    return view('pages.Currency');
})->name('currency');
Route::get('/team', function () {
    return view('pages.Team');
})->name('team');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
