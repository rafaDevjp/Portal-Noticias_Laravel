<?php

namespace App\Http\Controllers;

use App\models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller{

    //Função Apresenta o Formulario de CADASTRO
    public function read(Request $dados){

        $usuario = new usuarios;
        $usuario->usuario = $dados->usuario;
        $usuario->email = $dados->email;
        $usuario->tel = $dados->tel;
        $usuario->senha = $dados->senha;
        $usuario->save();


            return '<h1>VALORES CADASTRADOS NO BANCO DE DADOS</h1>';
            
    }
    public function login(){

            return view('admin/login');
            
    }
 
}
