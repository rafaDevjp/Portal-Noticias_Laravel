<?php

namespace App\Http\Controllers;

use App\models\Noticia;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;

class Main extends Controller{

    //Função EXIBE PAINEL.BLADE e  executa buscas ao BD para alimentar as tabelas no PAINEL.BLADE
    public function exibir_painel(){

        $dados =  Noticia::all();                           // ->> busca TODOS os dados 
        $visivel = Noticia::all()->where('visivel', 1);     // ->> busca dados na condição VISIVEL
        $invisivel = Noticia::all()->where('visivel', 0);   // ->> busca dados na condição INVISIVEL
        $destaque = Noticia::all()->where('destaque', 1);   // ->> busca dados na condição DESTAQUE

      return view('painel' , compact(['dados' , 'visivel', 'invisivel', 'destaque']));
    }
//-----------------------------------------------------------------------


    //Função que Exibe tela de FORMULARIO
    public function create(){

        return view('formulario');
    }
//-------------------------------------------------------------------------  


    //Função de abre o formulario de edição da noticia
    public function edite($id){

        $valor =  Noticia::find($id);
        return view('edite_noticia', compact('valor'));
    }
//--------------------------------------------------------------------------


    //Função faz o UPDATE dos dados e envia ao DATABASE
    public function update_noticias(Request $dados,$id){

        $noticia = Noticia::find($id);
        $noticia->titulo = $dados->titulo;
        $noticia->autor = $dados->autor;
        $noticia->categoria = $dados->categoria;
        $noticia->visivel = $dados->visivel;
        $noticia->destaque = $dados->destaque;
        $noticia->description = $dados->texto;

        if (isset($dados->visivel)) {
            $noticia->visivel = 1;
        } else {
            $noticia->visivel = 0;
        }
        if (isset($dados->destaque)) {
            $noticia->destaque = 1;
        } else {
            $noticia->destaque = 0;
        }
        $noticia->save();

         return redirect('/dashboard' );
         
    }
//------------------------------------------------------------------------  


    //Função Deleta dados do database
    public function delete($id){
        
         Noticia::destroy($id);

         return redirect('/dashboard');

    }
//-------------------------------------------------------------------------
    
}//END_CLASS
