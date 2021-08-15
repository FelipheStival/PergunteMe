<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class imageController extends Controller
{
    /**
     * Metodo para obter uma imagem
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getImage(String $nomeImagem)
    {
        if($nomeImagem == null || !is_string($nomeImagem)){
            return response()->json(['mensagem' => 'Nome da imagem invalido'], 400); 
        }
        if(!Storage::disk('public')->exists($nomeImagem)){
            abort(404);
        }
        return Storage::disk('public')->get($nomeImagem);
    }
}
