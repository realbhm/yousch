<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
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
        # on récupère toutes la listes du staff
        # on sait que la table staff est reliés au model staff, on va donc se servir de ce model pour intéragir avec la table en question
        # on va également bénéficier des méthodes de qu'offre l'orm pour la récupération des données.

        $staffs = Staff::all();
        return view('staffs.index', compact("staffs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # on génére le code automatiquement qu'on envoit à la vue
        $code_gen = "STA" . (date('Y') - 1800) . "" . rand(1000, 9999);
        return view('staffs.create', compact("code_gen"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //if the user has a avatar to upload

        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/uploads/staffs/'), $filename);
            $data['avatar'] = $filename;
        } else {
            $filename = "user.png";
        }

        # on récupère les données soumis dans le formulaire, on les vérifie et on les stock en bdd
        $request->validate([
            'staff_code' => 'required',
            'staff_name' =>  'required',
            'staff_sexe' =>  'required',
            'staff_surname' =>  'required',
            'staff_dob' =>  'required',
            'staff_pob' =>  'required',
            'staff_adress' =>  'required',
            'staff_phone' =>  'required',
            'staff_country' =>  'required',
            'staff_ville' =>  'required',
            'staff_postal' =>  'required',
            'staff_email' =>  ['required', 'string', 'email', 'max:255']
        ]);

        // generate a random new password for the user
        $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#&@!$';
        $pass = array();
        $combLen = strlen($comb) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $combLen);
            $pass[] = $comb[$n];
        }
        $passw=implode($pass);
        $password= Hash::make($passw);

        $user = array(
                'type' => "Staff",
                'email'=>$request->staff_email,
                'password'=>$password,
            );
        
              
        $mail_data=array(
            'name' => $request->staff_name." ".$request->staff_surname,
            'email'=>$request->staff_email,
            'password'=>$passw);

        $usermail=$request->staff_email;
        // send maill of the new password to the user
         \Mail::to($usermail)->send(new \App\Mail\Newuser($mail_data));
        //  create the new user
        $newuser= User::create($user);
        $newuser->roles()->attach([1 => 1]);
        $token=$newuser->createToken('staff_token')->plainTextToken;
        Staff::create($request->all());

        return redirect()->route('staffs.index')
            ->with('success', 'Staff créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {

 
        $staffs = Staff::all();
        return view('staffs.edit', compact('staff', 'staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        # c'est ici que l'on traite les mises à jour du profil

        //if the user has a avatar to upload
        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/uploads/staffs/'), $filename);
            $data['avatar'] = $filename;
        } else {
            $filename = "user.png";
        }

        $request->validate([
            'staff_code' => 'required',
            'staff_name' =>  'required',
            'staff_sexe' =>  'required',
            'staff_surname' =>  'required',
            'staff_dob' =>  'required',
            'staff_pob' =>  'required',
            'staff_adress' =>  'required',
            'staff_phone' =>  'required',
            'staff_country' =>  'required',
            'staff_ville' =>  'required',
            'staff_postal' =>  'required',
            'staff_email' =>  ['required', 'string', 'email', 'max:255']
        ]);

        $staff->update($request->all());

        return redirect()->route('staffs.index')
            ->with('success', 'Staff mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staffs.index')
            ->with('success', 'Staff supprimé avec succès');
    }
}
