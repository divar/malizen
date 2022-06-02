<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NeighborhoodAssociationResource;
use App\Models\NeighborhoodAssociation;
use Illuminate\Http\Request;

class NeighborhoodAssociationController extends Controller
{
    public function GetNeighborhoodAssociations(Request $request): \Illuminate\Http\JsonResponse
    {
        $villageId = $request->get('village-id', 0);

        if ($villageId <= 0) {
            return response()->json([]);
        }

        $neighborhoodAssociations = NeighborhoodAssociation::where('village_id', $villageId)->orderBy('name')->get();

        $collection = [];
        foreach ($neighborhoodAssociations as $neighborhoodAssociation) {
            array_push($collection, new NeighborhoodAssociationResource($neighborhoodAssociation));
        }

        return response()->json($collection);
    }
}
