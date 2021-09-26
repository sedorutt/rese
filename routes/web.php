<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\DoneController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReserveController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/{id}',[FavoriteController::class ,'store'])->name('good')->middleware('auth');
Route::delete('/{id}',[FavoriteController::class , 'destroy'])->name('normal')->middleware('auth');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/thanks', [ThanksController::class, 'index'])->name('thanks');
Route::get('/mypage', [MypageController::class, 'index'])->name('mypage')->middleware('auth');
Route::delete('/mypage/{id}', [ReserveController::class, 'destroy'])->name('destroy')->middleware('auth');
Route::get('/detail/{id}', [DetailController::class, 'show'])->name('detail');
Route::post('/detail/{id}', [ReserveController::class, 'store'])->name('reserve')->middleware('auth');
Route::get('/done', [DoneController::class, 'index'])->name('done')->middleware('auth');
