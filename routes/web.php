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
;


//Rotas de navegação (NAVBAR)
Route::get('/', 'NoticiaController@index')->name('inicio');
Route::get('formularios', 'formulario@forms')->name('formularios'); 
//

Route::resource('valor_noticias', 'NoticiaController');
Route::get('valor_noticias/edit/{id}', 'NoticiaController@edit');
Route::get('valor_noticias/delete/{id}', 'NoticiaController@destroy');


