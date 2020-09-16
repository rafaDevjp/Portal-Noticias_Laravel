<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\models\Noticia;

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


//
//Rotas de navegação (NAVBAR)
Route::get('/', 'NoticiaController@index')->name('inicio');
Route::get('dashboard', 'Main@exibir_painel')->name('painel');
//

Route::resource('valor_noticias', 'NoticiaController')->except(['destroy','edit','create', 'update']);

Route::get('create', 'Main@create')->name('formulario');
Route::get('edite/{id}', 'Main@edite')->name('edite');
Route::post('update_noticias/{id}', 'Main@update_noticias')->name('update');
Route::get('delete/{id}', 'Main@delete')->name('delete');


//Rota dedicada a Área de gestão da Plataforma
Route::get('admin2020', 'UsuariosController@create')->name('admin2020');
//rota para cadasrar usuarios
Route::post('registro', 'UsuariosController@read');
//rota de logar usuarios
Route::post('login','UsuariosController@login');