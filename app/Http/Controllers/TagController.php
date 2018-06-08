<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
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
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){
          return view ('tags.create');
        }else {
            return view('welcome');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){
            $tag = new Tag();
            $tag->name = $request->name;
            $tag->slug = str_slug($request->name);
            $tag->save();
            return redirect()->route('tagadmin');
         }else {
            return view('welcome');
        }
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
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){
            $tag = Tag::find($id);
            return view ('tags.edit' , compact('tag'));
         }else {
            return view('welcome');
        }
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
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){

        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $tag->update($request->all());
       
        $tag->save();

        return redirect()->route('tagadmin', $tag);
        }else {
            return view('welcome');
        }
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

             $tag = Tag::find($id)->delete();
             return back()->with('info' , 'Tag eliminada');
        }else {
            return view('welcome');
        }

    }
    public function tagadmin()
    {
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){
            
            $tags = new Tag();
            //Metedo all para recibir todos los datos
            $tags = $tags->all();
            return view('tags.index' , compact('tags'));

        }else {
            return view('welcome');
        } 
    }
}
