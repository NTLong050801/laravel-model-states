<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[OrderController::class,'index'])->name('index');
Route::get('/list',[OrderController::class,'listOrder'])->name('listOrder');

Route::get('/create',[OrderController::class,'create'])->name('create');
Route::post('/create',[OrderController::class,'createOrder'])->name('create.post');



Route::get('/order/{id}',[OrderController::class,'index']);
Route::post('/order/{id}',[OrderController::class,'store'])->name('order.store');
