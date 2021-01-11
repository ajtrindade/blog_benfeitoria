<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Posts;
use App\Models\User;
use Config\Auth;



class PostController extends Controller
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
        $name=auth()->user()->name;
        Posts::create([

            'titulo'=>$request->titulo,
            'corpo' =>$request->corpo,
            'autor'=>$name,
        ]);
        $s ='Usuário Cadastrado com sucesso';
        return Redirect::route('dashboard');
      
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
        $name=auth()->user()->name;
        DB::table('posts')->where('id', '=', $id)->delete();
        $posts = DB::select('select * from posts where autor = :autor', ['autor' => $name]);
        return Inertia::render('DeletePost', [
            'name'=> $name, 
            'posts' => $posts,
        ]);
    }
    
   
    public function deletePost()
    {
        $name=auth()->user()->name;
        $posts = DB::select('select * from posts where autor = :autor', ['autor' => $name]);
        return Inertia::render('DeletePost', [
            'name'=> $name, 
            'posts' => $posts,
        ]);
    }
    public function createPost()
    {
       return Inertia::render('InsertPost');
    }
    
       public function Sair()
    {
        return Inertia::render('Home');
    }

}
