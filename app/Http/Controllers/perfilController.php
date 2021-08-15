<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class perfilController extends Controller
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
        if($id == null){
            abort(404);
        }

        $usuario = User::findOrFail($id);
        return view("perfil/home",$usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id == null){
            abort(404);
        }
        $usuario = User::findOrFail($id);
        return view("perfil/edit",$usuario);
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
        $request->validate([
            'name' => 'required|unique:users|String'
        ]);

        $usuario = User::find($id);
        $usuario->name = $request->input('name');
        $usuario->save();

        return redirect()
        ->back()
        ->with("mensagem","teste");
    }

     /**
     * Update image profile
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateImage(Request $request, $id){

        $request->validate([
            'profile_image' => 'required|mimes:jpeg'
        ]);

        if($request->hasFile('profile_image')){
            
        }

        $usuario = User::find($id);
        $usuario->profile_image = $request->input('profile_image');
        $usuario->save();

        return redirect()
        ->back()
        ->with("mensagem","teste");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
