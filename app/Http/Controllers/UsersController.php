<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
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

        if(request()->ajax()) {
            return datatables()->of(
                User::whereHas('roles')
               ->get()
               ->transform(function ($item) {
                    $item->get_role = $item->roles->pluck('name')->implode(', ');
                    return $item;
                })
               ->all()
            )
            ->addColumn('action', function($data){
                return '
                    <a href="users/'.$data->id.'/edit" class="btn btn-warning btn-sm text-white" title="Modifier">
                          <i class="fa fa-pen" ></i>
                    </a>
                    <a href="delete/users/'.$data->id.'" class="btn btn-danger btn-sm" title="Supprimer" onclick="return confirm(\'Voulez-vous vraiment supprimer\')">
                          <i class="fa fa-trash" style="color: #fff;"></i>
                    </a>
                    ';
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('auth.register', compact('roles'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       abort("404");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
           //find the specific user by id
           $user=User::where('id', $id)->with('roles')->first();
           $rolesAll=Role::all();
           return view('users.edit', compact('user','rolesAll'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        try {
               $del=User::whereId($id)->first();
               $del->roles()->detach();
               $del->delete();
               return redirect()->route('users.index')->with(
              'success', 'Utilisateur supprimé avec succès');
        } catch (Exception $e) {
            return redirect()->route('users.index')->with(
              'error',
              $e);
        }
    }

}
