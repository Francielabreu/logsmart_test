<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users/sorteio', [UserController::class, 'sorteio'])->name('users.sorteio');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::get('/users/{user}/', [UserController::class, 'show'])->name('users.show');
Route::put('/users/{user}/', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::delete('/users/{user}/', [UserController::class, 'destroy'])->name('users.destroy');




Route::get('/', function () {
    return view('welcome');
});
