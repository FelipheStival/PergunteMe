<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perguntas extends Model
{
    public $timestamps = false;

    // Relacionamento tabela user
    public function User(){
        return $this->hasOne(User::class,'id','usuario_id');
    }

    // Relacionamento tabela categorias 
    public function categorias(){
        return $this->hasOne(categorias::class,'id','categoria_id');
    }

    use HasFactory;
}
