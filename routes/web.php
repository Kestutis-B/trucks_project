<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrucksController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/trucks', [TrucksController::class, 'index'])->name('trucks.index');
    Route::get('/trucks/create', [TrucksController::class, 'create'])->name('trucks.create');
    Route::post('/trucks/store', [TrucksController::class, 'store'])->name('trucks.store');
    Route::get('/trucks/{id}/edit', [TrucksController::class, 'edit'])->name('trucks.edit');
    Route::put('/trucks/{id}/update', [TrucksController::class, 'update'])->name('trucks.update');
    Route::delete('/trucks/{id}/delete', [TrucksController::class, 'destroy'])->name('trucks.destroy');
});
require __DIR__.'/auth.php';
