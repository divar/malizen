<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function GetDistricts () {
        $district = District::all();
        return response()->json($district);
    }
}
