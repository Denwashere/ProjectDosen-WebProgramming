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
    return view('homee');
});

Route::get('/homee', function () {
    return view('homee');
});

Route::get('/homee2', function () {
    return view('homee2');
});

Route::get('/homee3', function () {
    return view('homee3');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/home2', function () {
    return view('home2');
});


Route::get('/home3', function () {
    return view('home3');
});

Route::get('/coffee', function () {
    return view('coffee');
});

Route::get('/coffeeb', function () {
    return view('coffeeb');
});

Route::get('/juice', function () {
    return view('juice');
});

Route::get('/juiceb', function () {
    return view('juiceb');
});

Route::get('/milkshake', function () {
    return view('milkshake');
});

Route::get('/milkshakeb', function () {
    return view('milkshakeb');
});

Route::get('/softdrink', function () {
    return view('softdrink');
});

Route::get('/softdrinkb', function () {
    return view('softdrinkb');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/del1', function () {
    return view('del1');
});

Route::get('/del2', function () {
    return view('del2');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/tfyo', function () {
    return view('tfyo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
