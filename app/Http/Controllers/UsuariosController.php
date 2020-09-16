<?php

namespace App\Http\Controllers;

use App\models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuariosController extends Controller{


    //Função de Exibição da pagina de Admin formularios de cadastro e login
    public function create(){

        return view('admin/login');
    }

    //Função recebe os valores do Formulario de CADASTRO
    public function read(Request $dados){

       $dados->validate([   //BLOCO DE VALIDAÇÂO DO FORMULARIO
            'usuario' => 'required',
            'email' => 'required|unique:usuarios|email',
            'telefone' => 'numeric|required',
            'senha' => 'required|min:8'
             ]);

        $usuario = new usuarios;
        $usuario->usuario = $dados->usuario;
        $usuario->email = $dados->email;
        $usuario->tel = $dados->telefone;
        $usuario->senha = Hash::make($dados->senha);
        $usuario->save();

        $feed = 1;
        return  view('admin/login', compact('feed'));
            
    }

    //Função recebe os valores do Formulario de LOGIN e verifica  
    public function login(Request $request){

        $dados = usuarios::where('usuario', $request->usuario)->first();
          
        // return dd($dados);


        

            if (Hash::check($request->senha, $dados->senha)) {

                return redirect('dashboard');
            }
                 $feed = 2;
                return view('admin/login', compact('feed'));
        
        // return redirect('dashboard');
            
    }
 
}
