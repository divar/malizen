<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\VillageController;
use \App\Http\Controllers\Api\CitizenAssociationController;
use \App\Http\Controllers\Api\NeighborhoodAssociationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::get('v1/villages', [VillageController::class, 'GetVillages'])->name('api_get_villages');
    Route::get('v1/citizen-associations', [CitizenAssociationController::class, 'GetCitizenAssociations'])->name('api_get_rws');
    Route::get('v1/neighborhood-associations', [NeighborhoodAssociationController::class, 'GetNeighborhoodAssociations'])->name('api_get_rts');
});
