<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Course;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();

        
        return view('units.index', compact('units'));
        // return view('units.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # on devra ajouter un cours à l'unité d'enseignement
        $courses = Course::all();

        return view('units.create', compact('courses'));
        // return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'unit_name' => 'required',
            'unit_code' => 'required',
            'course_id' => 'nullable',
        ]);

        Unit::create($request->all());

        return redirect()->route('units.index')
            ->with('success', 'Unité d\'enseignement crée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        # on va afficher les matières contenu dans l'unité d'enseignement
        $courses = Course::all();

        // return view('units.show', compact('unit'));
        return view('units.show', compact('unit', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        # on pourra modifier un cours de l'unité d'enseignement
        $courses = Course::all();

        return view('units.edit', compact('unit', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'unit_name' => 'required',
            'unit_code' => 'required',
            'course_id' => 'nullable',
        ]);

        $unit->update($request->all());

        return redirect()->route('units.index')
            ->with('success', 'Unité d\'enseignement mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('units.index')
            ->with('success', 'Unité d\'enseignement supprimée avec succès');
    }
}
