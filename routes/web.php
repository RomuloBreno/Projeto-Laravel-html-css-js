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

Route::get('/painel', function () {
    return view('painel');
})->middleware(['auth', 'verified'])->name('welcome');


Route::get('/painel2', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('/pesquisar', function () {
    return view('search');
});
