<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Staff;
use Illuminate\Http\Request;

class CampusController extends Controller
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
        $campus = Campus::all();

        return view('campus.index', compact('campus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # on aura besoin d'attribuer un staff à chaque campus
        $staffs = Staff::all();

        return view('campus.create', compact("staffs"));
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
            'campus_name' => 'required',
            'campus_location' => 'required',
            'campus_phone' => 'required',
            'campus_email' => 'required',
            'staff_id' => 'required',
        ]);

        Campus::create($request->all());

        return redirect()->route('campus.index')
            ->with('success', 'Campus créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function show(Campus $campus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function edit(Campus $campus)
    {
        $staffs = Staff::all();
        return view('campus.edit', compact('campus', 'staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campus $campus)
    {
        $request->validate([
            'campus_name' => 'required',
            'campus_location' => 'required',
            'campus_phone' => 'required',
            'campus_email' => 'required',
            'staff_id' => 'required',
        ]);

        $campus->update($request->all());

        return redirect()->route('campus.index')
            ->with('success', 'Campus mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campus $campus)
    {
        $campus->delete();

        return redirect()->route('campus.index')
            ->with('success', 'Campus supprimé avec succès');
    }
}
