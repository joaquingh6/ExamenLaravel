<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = new Post();
        $posts = $posts->all();
        $tags = new Tag();
        $tags = $tags::all();
        //dd($posts);
        return view('blog', compact('posts' , 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {  
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){

                $tags = new Tag();
                $tags = $tags->orderBy('name','asc')->get();
                $categories = new Category();
                $categories = $categories->orderBy('name', 'asc')->pluck('name','id');

                 return view ('posts.create' , compact('tags', 'categories'));

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

            $post = new Post();
            $post->user_id = $request->user_id;
            $post->name = $request->name;
            $post->slug = str_slug($request->name);
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            $post->category_id = $request->category_id;
            $post->status = $request->status;
            if ($request->file('file')) {
                    $path = Storage::disk('public')->put('image',$request->file('file'));
                    $post->fill(['file'=>asset($path)])->save();
                }
         
            $post->save();

            $post->tags()->attach($request->tags);

            return redirect()->route('postadmin', $post);
            
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
       if(isset(Auth::user()->id)){
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }else {
         return view('welcome');
        }
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

            $post = Post::find($id);
            $categories = new Category();
            $categories = $categories->orderBy('name', 'asc')->pluck('name','id');
        
            $tags = Tag::all();
            return view ('posts.edit' ,compact('post' , 'tags' , 'categories'));
     
      
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

            $post = Post::find($id);
            $post->slug = str_slug($request->name);
            $post->update($request->all());
           
            $post->save();
            
            $post->tags()->attach($request->tags);

            return redirect()->route('postadmin', $post);

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
            $post = Post::find($id)->delete();
            return back()->with('info' , 'Post eliminado');
        }else {
            return view('welcome');
        }
    }

    public function postadmin()
    {
        if( Auth::user()->roles[0]['name'] == 'Administrador' ){
        $posts = new Post();
        //Metedo all para recibir todos los datos
        $posts = $posts->all();
        return view ('posts.postadmin' , compact('posts'));
    }else {
            return view('welcome')->name('');
        }

    }
}
