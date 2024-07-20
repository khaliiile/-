<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginPage;
use App\Http\Controllers\create;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/login', [loginPage::class, 'login'])->name('login');

Route::get('/create', [create::class, 'create'])->name('create');

Route::post('/store', [create::class, 'store'])->name('store');

Route::post('/login', [loginPage::class, 'loginIn']);
Route::post('/logout', [loginPage::class, 'logout'])->name('logout');