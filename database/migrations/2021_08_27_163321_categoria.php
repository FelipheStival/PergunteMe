<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Categoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
        });

        // Inserindo valores iniciais
        DB::table('categorias')->insert([
            ['nome' => 'paquera', ],
            ['nome' => 'encontros'],
            ['nome' => 'relacionamentos'],
            ['nome' => 'sexualidade'],
            ['nome' => 'comportamento'],
            ['nome' => 'estilo'],
            ['nome' => 'outros'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
