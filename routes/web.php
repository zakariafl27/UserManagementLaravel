<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('profile');
// });


Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profiles/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profiles/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('profiles/{id}', [ProfileController::class, 'destroy'])->name('profile.delete');


