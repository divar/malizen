<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NeighborhoodAssociationController;
use App\Http\Controllers\CitizenAssociationController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ReligionController;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::fallback(function () {
        return response()->view('errors.404', [], 404);
    });
    Route::resources([
        'v1/provinces'  => ProvinceController::class,
        'v1/cities'     => CityController::class,
        'v1/districts'  => DistrictController::class,
        'v1/villages'   => VillageController::class,
        'v1/residents'  => ResidentController::class,
        'v1/rts'        => NeighborhoodAssociationController::class,
        'v1/rws'        => CitizenAssociationController::class,
        'v1/religions'   => ReligionController::class,
        'v1/professions' => ProfessionController::class,
    ]);
});

require __DIR__ . '/auth.php';
