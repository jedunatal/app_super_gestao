<?php

use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return 'Olá mundo!' ;
});*/

Route::get('/', 'HomeController@Home');

Route::get('/sobre-nos', 'SobrenosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

//nome, categoria, assunto e mensagem

//Parâmetros opcionais quando é colocado "?" ou seja não precisa de uma string específica.
//Sem "?" aparece o nome da variavel

Route::get(
    '/contato/{nome}/{categoria_id}',
        function(
            String $nome = 'Desconhecido',
            Int $categoria_id = 1 // 1 - *Informação*
        ) {
            echo "Estamos aqui: .$nome - $categoria_id";
        }
    )->where('categoria_id','[0-9]+')->where('nome', '[A-Za-z]+');
