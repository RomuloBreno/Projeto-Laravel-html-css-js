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

Route::get('/loja', function () {
    return view('store');
});

Route::get('/sobre', function () {
    return view('find');
});

Route::get('/patrocinador', function () {
    return view('sponsor');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/carrinho', function () {
    return view('cart');
});
Route::get('/pesquisa', function () {
    return view('search');
});