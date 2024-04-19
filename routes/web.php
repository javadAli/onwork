<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\COntrollers\WorkersController;

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
Route::view("/","welcome");
Route::get("/workers/{workId}",[WorksController::class,"getWorkers"])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("works",WorksController::class)->middleware("auth");
Route::resource("workers",WorkersController::class)->middleware("auth");

require __DIR__.'/auth.php';
