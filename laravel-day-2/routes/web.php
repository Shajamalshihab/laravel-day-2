<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/',[WelcomeController::class,'index'])->name('home');
Route::get('/about',[WelcomeController::class,'about'])->name('about');
Route::get('/service',[WelcomeController::class,'service'])->name('service');
Route::get('/bitm/basis',[WelcomeController::class,'bitm'])->name('bitm');
