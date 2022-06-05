<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.profession.index', [
            'user'     => Auth::user(),
            'professions' => Profession::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.profession.create', [
            'title_page' => 'Buat Profesi',
            'user'       => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $existingProfession = Profession::where('name', $request->get('name'))->first();

            if ($existingProfession) {
                return response()->redirectTo('v1/professions');
            }
            $profession             = new Profession();
            $profession->name       = $request->get('name');
            $profession->created_by = Auth::user()->id;
            return $profession->save();
        });
        return response()->redirectTo('v1/professions');
    }

    /**
     * Display the specified resource.
     *
     * @param  Profession  $profession
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Profession $profession)
    {
        return view('pages.profession.show', [
            'title_page' => 'View User',
            'profession'       => $profession,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profession  $proffesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Profession $proffesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profession  $proffesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profession $proffesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profession  $proffesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profession $proffesion)
    {
        //
    }
}
