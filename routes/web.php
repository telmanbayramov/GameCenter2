<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('branches', BranchController::class);



Route::get('/branches', [BranchController::class, 'index'])->name('branches.index');
Route::get('/branches/create', [BranchController::class, 'create'])->name('branches.create');
Route::post('/branches', [BranchController::class, 'store'])->name('branches.store');
Route::get('/branches/{id}', [BranchController::class, 'show'])->name('branches.show');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
