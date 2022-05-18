<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
      'professions' => Religion::all(),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
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
