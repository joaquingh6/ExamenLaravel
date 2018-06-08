<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if( Auth::user()->roles[0]['name'] == 'Administrador' ){
     
        //dd($posts);
        return view('admin.index');
        }else {
            return view('welcome');
        }

    }   





}
