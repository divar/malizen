<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.village.index', [
            'user'     => Auth::user(),
            'villages' => Village::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.village.create', [
            'title_page' => 'Buat Kelurahan',
            'user'       => Auth::user(),
            'districts'  => District::orderBy('name')->get(),
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
            $district = District::find($request->get('district_id'));

            $village             = new Village();
            $village->name       = $request->get('name');
            $village->created_by = Auth::user()->id;

            $district->villages()->save($village);
        });
        return response()->redirectTo('v1/villages');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Village $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Village $village
     * @return \Illuminate\Http\Response
     */
    public function edit(Village $village)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Village $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Village $village
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        //
    }
}
