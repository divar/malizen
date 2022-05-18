<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\HomeController;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::fallback(function(){ return response()->view('errors.404', [], 404); });
    Route::resources([
        'v1/residents' => ResidentController::class,
        'v1/neighborhood' => ResidentController::class,
    ]);
});

require __DIR__.'/auth.php';
