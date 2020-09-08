
@extends('layout/app')

@section('conteudo-dinamico')




    <div class="container pt-5" style="min-height: 600px">
        <div class="row">
            <div class="col-10">
                <h1 class="pt-5">{{$dados->titulo}}</h1>
                <small class="text-info">Autor: {{ $dados->autor}}</small>
                <hr>
                <p class="text-justify">{{$dados->description}}</p>
                <a href="../valor_noticias" class="btn btn-danger" title="Voltar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <a href="edit/{{$dados->id_noticia}}" class="btn btn-primary" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                
            </div>
        </div>
    </div>
    
@endsection