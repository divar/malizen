<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function GetVillages(Request $request): \Illuminate\Http\JsonResponse
    {
        $districtId = $request->get('district-id', 0);

        if ($districtId <= 0) {
            return response()->json([]);
        }

        $villages = Village::where('district_id', $districtId)->orderBy('name')->get();

        return response()->json($villages);
    }
}
