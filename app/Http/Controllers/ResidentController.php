<?php

namespace App\Http\Controllers;

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
      'districts' => District::orderBy('name')->get(),
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
          $req = $request->all();

          $resident             = new Resident();
          $resident->name       = $req['name'];
          $resident->created_by = Auth::user()->id;
            neighborhood_association_id
            religion_id
            profession_id
            nik
            kk
            name
            birth_place
            nationality
            birth_date
            address
            ethnic
            language
            married_status
            profession_status
            daily_activity
            home_ownership
            relationship_with_head_of_family
            is_head_of_family
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
