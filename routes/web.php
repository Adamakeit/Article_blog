<?php

use App\Http\Controllers\Articlecontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashbord', [usercontroller::class, 'dashbord']);
Route::get('/index', [Articlecontroller::class, 'index'])->name('index');
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [usercontroller::class, 'logout'])->name('logout');
    Route::get('/enregistrer', [Articlecontroller::class, 'enregistrer'])->name('enregistrer');
    Route::post('/enregistrer', [Articlecontroller::class, 'handleenregister'])->name('enregistrer');
    Route::get('/enregistrer/{article}', [Articlecontroller::class, 'show'])->name('show')->withoutMiddleware('auth');
    Route::get('/edit/{article}', [Articlecontroller::class, 'editer'])->name('edit');
    Route::put('/edit/{article}/update', [Articlecontroller::class, 'update'])->name('edit');
    Route::delete('/edit/{article}/delete', [Articlecontroller::class, 'delete']);
});
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [usercontroller::class, 'register'])->name('register');
    Route::post('/register', [usercontroller::class, 'handleregister']);
    Route::get('/login', [usercontroller::class, 'login'])->name('login');
    Route::post('/login', [usercontroller::class, 'handlelogin'])->name('login');
});
Route::get('/mine', [usercontroller::class, 'mine'])->name('mine');
