<?php

use App\Http\Controllers\PerguntaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Rotas perfil
Route::middleware('auth')->group(function () {

    // rotas home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/sair', [App\Http\Controllers\HomeController::class, 'sair'])->name('sair');

    // Rotas perfil
    Route::prefix('perfil')->group(function () {

        // Rotas perfil
        Route::get('/', [App\Http\Controllers\perfilController::class, 'index']);
        Route::get('/{id}',[App\Http\Controllers\perfilController::class, 'show'])->name("show");
        Route::get('/editar/{id}',[App\Http\Controllers\perfilController::class, 'edit'])->name('editar');

        // Rotas para atualizar informaçoes perfil
        Route::put('/update/imagem/',[App\Http\Controllers\perfilController::class, 'updateImage'])->name('atualizar-imagem'); 
        Route::put('/update/nome/{id}', [App\Http\Controllers\perfilController::class, 'update'])->name('update-nome');

    });

    // Rotas perguntas
     Route::resources([
         'perguntas' => PerguntaController::class
     ]);

});

//Rotas imagem
Route::prefix('imagem')->group(function () {
    Route::get('/{nomeImagem}', [App\Http\Controllers\imageController::class, 'getImage'])->name('imagem');
});