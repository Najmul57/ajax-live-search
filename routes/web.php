<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;



Route::get('/',[indexController::class,'home'])->name('home');
Route::get('search',[indexController::class,'search'])->name('search');
