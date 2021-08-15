<?php

namespace App\Http\Controllers;

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

        $retorno = [
            'nome' => $usuario,
            'imagem' => $imagem,
            'id' => $id
        ];

        return view('home/home',$retorno);
    }
}
