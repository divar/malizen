<?php

namespace App\Http\Controllers;

use App\Models\CitizenAssociation;
use App\Models\City;
use App\Models\NeighborhoodAssociation;
use App\Models\Province;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NeighborhoodAssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.neighborhood-association.index', [
            'user'                      => Auth::user(),
            'neighborhood_associations' => NeighborhoodAssociation::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.neighborhood-association.create', [
            'title_page'           => 'Buat RT',
            'user'                 => Auth::user(),
            'villages'             => Village::orderBy('name')->get(),
            'citizen_associations' => CitizenAssociation::orderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $village = Village::find($request->get('village_id'));
            $citizenAssociation = CitizenAssociation::find($request->get('citizen_association_id'));

            if (!$village) {

            }

            $rt             = new NeighborhoodAssociation();
            $rt->name       = $request->get('name');
            $rt->created_by = Auth::user()->id;
            $rt->village()->associate($village);
            if ($citizenAssociation) {
                $rt->citizenAssociation()->associate($citizenAssociation);
            }
            $rt->save();
        });
        return response()->redirectTo('v1/rts');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\NeighborhoodAssociation $neighborhoodAssociation
     * @return \Illuminate\Http\Response
     */
    public function show(NeighborhoodAssociation $neighborhoodAssociation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\NeighborhoodAssociation $neighborhoodAssociation
     * @return \Illuminate\Http\Response
     */
    public function edit(NeighborhoodAssociation $neighborhoodAssociation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\NeighborhoodAssociation $neighborhoodAssociation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NeighborhoodAssociation $neighborhoodAssociation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\NeighborhoodAssociation $neighborhoodAssociation
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeighborhoodAssociation $neighborhoodAssociation)
    {
        //
    }
}
