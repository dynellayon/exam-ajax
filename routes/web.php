<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class,'products'])->name('dashboard');
Route::post('/add-product',[ProductController::class,'addProduct'])->name('add.product');
Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('edit.product');
Route::post('/update-product/{id}',[ProductController::class,'update'])->name('update.product');
Route::post('/delete-product/{id}',[ProductController::class,'destroy'])->name('delete.product');