<?php

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

Route::get('/', 'PrincipalController@principal')->name('site.principal');
Route::get('/sobre', 'SobreController@sobre')->name('site.sobre');
Route::get('/projeto', 'ProjetoController@projeto')->name('site.projeto');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');


Route::fallback(function() {
    echo 'A rota acessada não existe. 
  <a href="'.route('site.principal').'">Clique aqui</a> para ir para a pagina inicial';
});