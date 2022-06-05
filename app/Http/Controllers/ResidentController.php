<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResidentPostRequest;
use App\Models\City;
use App\Models\District;
use App\Models\NeighborhoodAssociation;
use App\Models\Profession;
use App\Models\Religion;
use App\Models\Resident;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.resident.index', [
            'user'      => Auth::user(),
            'residents' => Resident::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.resident.create', [
            'title_page'  => 'Buat Penduduk',
            'user'        => Auth::user(),
            'religions'   => Religion::all(),
            'professions' => Profession::all(),
            'districts'   => District::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ResidentPostRequest $request)
    {
        DB::transaction(function () use ($request) {
            $reqs                    = $request->all();
            $neighborhoodAssociation = NeighborhoodAssociation::find($reqs['rt']);
            $religion                = Religion::find($reqs['religion_id']);
            $profession              = Profession::find($reqs['profession_id']);

            $resident                                   = new Resident();
            $resident->name                             = $reqs['name'];
            $resident->nik                              = $reqs['nik'];
            $resident->kk                               = $reqs['kk'];
            $resident->birth_place                      = $reqs['birth_place'];
            $resident->birth_date                       = $reqs['birth_date'];
            $resident->nationality                      = $reqs['nationality'];
            $resident->address                          = $reqs['address'];
            $resident->ethnic                           = $reqs['ethnic'];
            $resident->language                         = isset($reqs['language']) ? $reqs['language'] : 'Indonesia';
            $resident->married_status                   = $reqs['married_status'];
            $resident->profession_status                = $reqs['profession_status'];
            $resident->daily_activity                   = $reqs['daily_activity'];
            $resident->home_ownership                   = $reqs['home_ownership'];
            $resident->relationship_with_head_of_family = $reqs['relationship_with_head_of_family'];
            $resident->is_head_of_family                = $reqs['is_head_of_family'];

            $resident->neighborhoodAssociation()->associate($neighborhoodAssociation);
            $resident->religion()->associate($religion);
            $resident->profession()->associate($profession);

            return $resident->save();
        });
        return response()->redirectTo('v1/districts');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Resident $resident
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Resident $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Resident $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resident $resident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Resident $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        //
    }
}
