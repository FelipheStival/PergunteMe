<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class perfilController extends Controller
{   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

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
    public function update(Request $request,$id)
    {   
        $request->validate([
            'name' => 'required|unique:users|String'
        ],
        [
            'name.required' => 'O campo nome é obrigatório.',
            'name.unique' => 'Nome de usuário já utilizado',
            'name.String' => 'Nome de usuário deve ter apenas letras'
        ]);

        $usuario = User::find($id);
        $usuario->name = $request->name;
        if($usuario->save()){

            return redirect()
            ->back()
            ->with(['mensagem' => 'Usuário atualizado com sucesso']);  
             
        }
    }

     /**
     * Update image profile
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateImage(Request $request){

        // Fazendo upload imagem
        $imagem = $request->file('image');
        $nomeImagem = $imagem->getClientOriginalName();

        $image_resize = $this->regizeImage($imagem,110,110);
        $image_resize->save(storage_path('app/public/') .$nomeImagem);

        // Atualizando banco de dados
        $id = Auth::id();
        $usuario = User::find($id);
        $usuario->image_profile = $nomeImagem;

        if($usuario->save() && $image_resize->save(storage_path('app/public/') .$nomeImagem)){
            return response()->json(['mensagem' => "Foto de usuario atualizada com sucesso"]);
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
        //
    }

    /**
     * Método para redimencionar a imagem
     */
    private function regizeImage($imagem,$width,$height){
        $image_resize = Image::make($imagem->getRealPath()); 
        $image_resize->resize($width,$height);
        return $image_resize;
    }
}
