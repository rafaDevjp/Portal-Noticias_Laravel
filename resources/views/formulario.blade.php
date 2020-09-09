@extends('layout/app')

@section('titulo')
    News | Adicionar Notícia
  @endsection




@section('conteudo-dinamico')
   <h2 class="p-5">View Fomulario</h2> 

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-5 border p-4 shadow ">
                <div class="text-center text-success">
                    <h3 class="p-3">Escreva uma nova noticia</h3>
                </div>
               <form action="valor_noticias" method="post">

                       @csrf

                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Autor</label>
                        <input type="text" class="form-control" name="autor" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Texto</label>
                        <textarea name="texto" class="form-control" id="" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                       
                        <input type="submit" class="btn btn-outline-success btn-block" value="Enviar Notícia">
                    </div>
                   @php
                       echo $feed ?? '';
                   @endphp
               </form>
            <a href="{{route('painel')}}">Voltar</a>

           </div>
       </div>
   </div>
@endsection

