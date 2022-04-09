<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TkriteriaController;


Route::resource('/',DashboardController::class);
Route::resource('tkriteria',TkriteriaController::Class);