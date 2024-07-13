<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NivelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//==================================== Frontend part ===============================


//==================================== admin part ===============================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   // Route::get('/',[NivelController::class,'index'])->name('Nivel.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

