<?php

use App\Http\Controllers\Front\WallController as FrontWallController;
use App\Http\Controllers\WallController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/walls', [WallController::class, 'index'])->name('walls.index');
Route::get('/walls/create', [WallController::class, 'create'])->name('walls.create');
Route::get('/walls/{id}', [WallController::class, 'show'])->name('walls.show');
Route::get('/walls/{id}/edit', [WallController::class, 'edit'])->name('walls.edit');

Route::get('/{username}/wall/{id}', [FrontWallController::class, 'show'])->name('front.wall');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
