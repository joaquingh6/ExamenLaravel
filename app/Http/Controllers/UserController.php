<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          if( Auth::user()->roles[0]['name'] == 'Administrador' ){
              $user = User::find($id)->delete();
             return back()->with('info' , 'Tag eliminada');
        }else {
            return view('welcome');
        }
    }

    public function useradmin()
    {
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){
            $users = new User();
            $users = $users->all();
           return view('users.index' , compact('users'));
        }else {
            return view('welcome');
        }
    }

    public function perfil(){

        if(isset(Auth::user()->id)){

            $id = Auth::user()->id;
            $user = User::find($id);
            return view('users.perfil', compact('user'));
        }else {
            return view('welcome');
        }



    }
}
