<?php

namespace App\Http\Controllers;

use App\models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;
use PhpParser\Node\Expr\Isset_;

class NoticiaController extends Controller
{
    /**
     * apresenta uma view com todos os valores do database .
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $dados =  Noticia::all();
        
        return view('noticias' , compact('dados'));
    }

    /**
     * Apresenta um Formulario para coletar dados e enviar para o método Store adicionar ao banco de dados.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        //    return view('formulario');
        //
    }

    /**
     * Store é a função que leo dado, ou seja, recebe o dado da view e adciona na base de dados
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $dados){
        
        $noticia =  new noticia;

        $noticia->titulo = $dados->titulo;
        $noticia->autor = $dados->autor;
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
     * Apresente um formulario para Editar um dado especifico.
     * 
     * @param  \App\models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $id){

      
        $dados =  Noticia::find($id);
        return view('edite_noticia', compact('dados'));
    
        // return 'Metodo EDITAR';
    }

    /**
     * Função que atualiza o dado espesifico na base de dados
     *****não apresenta tela

     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $id){

      

      
             
         

        return '<h1>Estes são os valores do UPDATE</h1><br>' . $id . '<br>' . $request->titulo . '<br>' . $request->autor .'<br>' . $request->texto ;

       
        
    }

    /**
     * Função que deleta um dados especifico na base de dados 
     * ***não apresenta tela 
     * 
     * @param  \App\models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $id){


        //return noticia::find($id);


        return 'Metodo DELETAR';
    }
}
