<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\categorias;
use App\Models\perguntas;

class PerguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        return view('perguntas.index',$retorno);
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
        $request->validate([
            'nomePergunta' => 'required|String',
            'conteudoPergunta' => 'required|String',
            'categoriaPergunta' => 'required|max:7|min:1'
        ],
        [
            'nomePergunta.required' => 'O campo titulo é obrigatório.',
            'nomePergunta.String' => 'Titulo deve conter apenas letras',
            'conteudoPergunta.required' => 'O campo conteúdo é obrigatório.',
            'conteudoPergunta.String' => 'O campo conteúdo deve conter apenas letras.',
            'categoriaPergunta.required' => 'O campo categoria pergunta é obrigatório',
            'conteudoPergunta.Number' => 'Erro campo categoria'
        ]);

        $pergunta = new perguntas();
        $pergunta->titulo = $request->input('nomePergunta');
        $pergunta->conteudo = $request->input('conteudoPergunta');
        $pergunta->categoria_id = $request->input('categoriaPergunta');
        $pergunta->usuario_id = Auth::id();

        if($pergunta->save()){
            return back()
            ->with(['mensagem' => 'Pergunta cadastrada com sucesso']);   
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
        //
    }
}
