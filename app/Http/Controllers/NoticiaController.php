<?php

namespace App\Http\Controllers;

use App\models\Noticia;
use Illuminate\Http\Request;


class NoticiaController extends Controller
{
    /**
     * apresenta uma view com todos os valores do database .*/
   
    public function index(){

        $dados =  Noticia::all()->sortByDesc('id_noticia');
        $noticia_destaque =  Noticia::all()->where('destaque', 1)->sortByDesc('id_noticia');
        
        return view('noticias' , compact(['dados', 'noticia_destaque']));
    }

    /**
     * Apresenta um Formulario para coletar dados e enviar para o método Store adicionar ao banco de dados.*/
     
    public function create(){

    }

    /**
     * Store é a função que leo dado, ou seja, recebe o dado da view e adciona na base de dados*/
    
    public function store(Request $dados){
        
        $noticia =  new noticia;

        $noticia->titulo = $dados->titulo;
        $noticia->autor = $dados->autor;
        $noticia->categoria = $dados->categoria;
        $noticia->visivel = $dados->visivel;
        $noticia->destaque = $dados->destaque;
        $noticia->description = $dados->texto;

        if (isset($dados->visivel)) {
            $noticia->visivel = 1;
        }else {
            $noticia->visivel = 0;
        }if (isset($dados->destaque)) {
            $noticia->destaque = 1;
        }else {
            $noticia->destaque = 0;
        }
        $noticia->save();

        $feed = ['feed' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>Parabéns!</strong> Sua noticia foi adicionada em nossa base.
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                 </button>
                            </div>'];
        
       return view('formulario',$feed);
    }

    /**
     * Apresenta  um dado especifico atravez do seu ID
     *
     * @param  \App\models\Noticia  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

        //return Noticia::where('id_noticia', $noticia)->get();  OPCINAL 

          $dados = noticia::find($id);

          return view('show_noticia', compact('dados'));

        //   return 'Apresenta SHOW';

        
    }

    /**
     * Apresente um formulario para Editar um dado especifico.*/
    
    public function edit(Noticia $id){
  
    }

    /**
     * Função que atualiza o dado espesifico na base de dados*/
  
    public function update(Request $request, Noticia $id){  
        
    }

    /**
     * Função que deleta um dados especifico na base de dados */
  
    public function destroy(Noticia $id){

    }
}
