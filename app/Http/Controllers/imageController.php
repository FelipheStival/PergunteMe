<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class imageController extends Controller
{
    /**
     * Metodo para obter uma imagem
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getImage(String $nomeImagem)
    {
        $content = Storage::disk('public')->get($nomeImagem);
        return response($content);
    }
}
