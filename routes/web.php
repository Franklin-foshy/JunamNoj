<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});
//==================================== Frontend part ===============================


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/nivel3', function() {
    return view('c_nivel3');
})->name('nivel3');

Route::get('/nivel1', function() {
    return view('nivel1');
})->name('nivel1');


Route::get('/nivel2', function() {
    return view('historia_nivel2');
})->name('nivel2');



require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class, 'index'])->
middleware(['auth','admin']);

