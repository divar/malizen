<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CitizenAssociation;
use Illuminate\Http\Request;

class CitizenAssociationController extends Controller
{
    public function GetCitizenAssociations (Request $request): \Illuminate\Http\JsonResponse
    {
        $villageId = $request->get('village_id', null);
        if (!$villageId) {
            return response()->json([]);
        }

        $citizenAssociations = CitizenAssociation::where('village_id', $villageId)->get();
        return response()->json($citizenAssociations);
    }
}
