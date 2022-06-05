<?php

namespace App\Http\Controllers;

use App\Models\CitizenAssociation;
use App\Models\NeighborhoodAssociation;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CitizenAssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.citizen-association.index', [
            'user'                 => Auth::user(),
            'citizen_associations' => CitizenAssociation::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.citizen-association.create', [
            'title_page' => 'Buat RW',
            'user'       => Auth::user(),
            'villages'   => Village::orderBy('name')->get()
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
            $existingRw = CitizenAssociation::where('name', ltrim($request->get('name'), "0"))->first();
            $village    = Village::find($request->get('village_id'));

            if (!$village) {
                return abort(400);
            }

            if (!$existingRw) {
                return response()->redirectTo('v1/citizen-associations');
            }

            $rw             = new CitizenAssociation();
            $rw->name       = $request->get('name');
            $rw->created_by = Auth::user()->id;

            return $village->citizenAssociations()->save($rw);
        });
        return response()->redirectTo('v1/citizen-associations');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CitizenAssociation $citizenAssociation
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(CitizenAssociation $citizenAssociation)
    {
        return view('pages.citizen-association.show', [
            'title_page'          => 'View User',
            'citizen_association' => $citizenAssociation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CitizenAssociation $citizenAssociation
     * @return \Illuminate\Http\Response
     */
    public function edit(CitizenAssociation $citizenAssociation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CitizenAssociation $citizenAssociation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitizenAssociation $citizenAssociation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CitizenAssociation $citizenAssociation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CitizenAssociation $citizenAssociation)
    {
        //
    }
}
