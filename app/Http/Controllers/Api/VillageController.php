<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function GetVillages (): \Illuminate\Http\JsonResponse
    {
        $villages = Village::all();
        return response()->json($villages);
    }
}
