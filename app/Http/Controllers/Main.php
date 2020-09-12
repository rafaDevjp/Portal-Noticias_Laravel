<?php

namespace App\Http\Controllers;

use App\models\Noticia;
use Illuminate\Http\Request;

class Main extends Controller{

    public function exibir_painel(){

        $dados =  Noticia::all();
        $visivel = Noticia::all()->where('visivel', 1);
        $invisivel = Noticia::all()->where('visivel', 0);
        $destaque = Noticia::all()->where('destaque', 1);

      return view('painel' , compact(['dados' , 'visivel', 'invisivel', 'destaque']));
    }

    public function adicionar_noticia()
    {
        //Exibe tela de FORMULARIO
        return view('formulario');
    }

    





 
}//END_CLASS
