<?php

use App\Http\Controllers\Front\WallController as FrontWallController;
use App\Http\Controllers\WallController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/walls')->middleware(['auth'])->name('walls.')->group(function(){

    Route::get('/', [WallController::class, 'index'])->name('index');
    Route::get('/create', [WallController::class, 'create'])->name('create');
    Route::get('/{id}', [WallController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [WallController::class, 'edit'])->name('edit');

});

// Embed Page
Route::get('/embed/wall/{id}', [FrontWallController::class, 'embed'])->name('embed.wall');

// Public pages
Route::get('/{username}/wall/{id}/add', [FrontWallController::class, 'show'])->name('front.wall');
Route::get('/{username}/wall/{id}', [FrontWallController::class, 'index'])->name('front.wall.index');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
