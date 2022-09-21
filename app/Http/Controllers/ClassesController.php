<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClassesController extends Controller
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
        $classes = Classe::all();

        return view('classes.index', compact("classes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campus = Campus::all();
        return view('classes.create',compact('campus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # on récupère les données soumis dans le formulaire et on effectue une vérification avant de les stocker en bdd
        $request->validate([
            'class_name' => 'required',
            'class_code' => 'required',
            'campus_id' => 'required',
        ]);

        Classe::create($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Classe créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classe=Classe::findOrFail($id);
        $campus = Campus::all();
        return view('classes.edit', compact('classe','campus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_name' => 'required',
            'class_code' => 'required',
            'campus_id' => 'required',
        ]);
        $classe=Classe::findOrFail($id);
        $classe->update($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Classe mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()->route('classes.index')
            ->with('success', 'Classe supprimée avec succès');
    }
}
