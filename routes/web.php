<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\WallController as FrontWallController;
use App\Http\Controllers\WallController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
});

if(env('APP_ENV') == "production"){
    URL::forceScheme('https');
}

Route::prefix('/walls')->middleware(['auth'])->name('walls.')->group(function(){

    Route::get('/create', [WallController::class, 'create'])->name('create');
    Route::get('/{id}', [WallController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [WallController::class, 'edit'])->name('edit');

});

// Embed Page
Route::get('/embed/wall/{id}', [FrontWallController::class, 'embed'])->name('embed.wall');

// Public pages
Route::get('/{username}/wall/{id}', [FrontWallController::class, 'index'])->name('front.wall.index');

// Dashboard
Route::middleware(['auth:sanctum'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
