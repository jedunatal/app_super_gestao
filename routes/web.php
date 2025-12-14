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
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
        function (
            String $nome,
            String $categoria,
            String $assunto,
            String $mensagem = 'Mensagem não informada' //Adicionamos um valor padrão, caso ele seja enviado pela requisição feita pelo cliente
        ) {
            echo 'Estamos aqui: '.$nome.' '.$categoria.' '.$assunto.' '.$mensagem;
        }
);
