<?php

use App\Http\Controllers\Api\Anime;
use Illuminate\Support\Facades\Route;


Route::get('/{page?}', [Anime::class,'index'])->name('home');
Route::get('/top/{top}/{page?}',[Anime::class,'top'])->name('top');
Route::get('/season/{year}/{season}',[Anime::class,'season'])->name('season');
