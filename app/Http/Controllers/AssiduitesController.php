<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Campus;
use App\Models\Classe;

use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Assiduite;
use Illuminate\Http\Request;

class AssiduitesController extends Controller
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
        $campuses=Campus::all();
        $classes=Classe::all();
        $courses=Course::all();
        $subjects=Subject::all();
        
       return view('assiduites.index',compact('campuses', 'classes', 'courses','subjects'));
    }
    public function find(Request $request)
    {  
        // init
        $campuses=Campus::all();
        $classes=Classe::all();
        $courses=Course::all();
        $subjects=Subject::all();
        $students=Student::where('campus_id', '=', $request->campus_id)
                        ->where('course_id', '=', $request->course_id)
                        ->where('class_id', '=', $request->class_id)
                        ->get();
        return view('assiduites.index',compact('campuses', 'classes', 'courses','students','subjects'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assiduites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assiduite  $assiduite
     * @return \Illuminate\Http\Response
     */
    public function show(Assiduite $assiduite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assiduite  $assiduite
     * @return \Illuminate\Http\Response
     */
    public function edit(Assiduite $assiduite)
    {
        return view('assiduites.edit', compact('assiduite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assiduite  $assiduite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assiduite $assiduite)
    {
        $request->validate([
            'justificatif' => 'required',
            'retard' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $assiduite->update($request->all());

        return redirect()->route('assiduites.index')
            ->with('success', 'Règle mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assiduite  $assiduite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assiduite $assiduite)
    {
        $assiduite->delete();

        return redirect()->route('assiduites.index')
            ->with('success', 'Règle supprimée avec succès');
    }
}
