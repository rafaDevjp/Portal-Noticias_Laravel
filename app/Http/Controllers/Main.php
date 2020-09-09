<?php

namespace App\Http\Controllers;

use App\models\Noticia;
use Illuminate\Http\Request;

class Main extends Controller{

    public function exibir_painel(){


        $dados =  Noticia::all();

      return view('painel' , compact('dados'));
    }

    public function adicionar_noticia()
    {
        //Exibe tela de FORMULARIO
        return view('formulario');
    }




 
}//END_CLASS
