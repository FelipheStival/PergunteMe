<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuario = Auth::user()->name;
        $imagem = Auth::user()->image_profile;
        $id = Auth::user()->id;
        $categorias = categorias::all();

        $retorno = [
            'nome' => $usuario,
            'image_profile' => $imagem,
            'id' => $id,
            'categorias' => $categorias
        ];

        return view('home/home',$retorno);
    }

     /**
     * Método para sair da aplicaçao.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sair()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
