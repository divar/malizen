<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resources([
        'v1/residents' => ResidentController::class,
        'v1/neighborhood' => ResidentController::class,
    ]);
});

require __DIR__.'/auth.php';
