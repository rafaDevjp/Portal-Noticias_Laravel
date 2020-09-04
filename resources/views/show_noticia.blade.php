@extends('layout/app')

@section('conteudo-dinamico')

<h1>Show Noticias</h1>


    <div class="container p-5">
        <div class="row">
            <div class="col-10">
                <h3>{{$dados->titulo}}</h3>
                <small class="text-info">Autor: {{ $dados->autor}}</small>
                <hr>
                <p class="text-justify">{{$dados->description}}</p>

                <a href="edit/{{$dados->id_noticia}}">Editar Noticia</a>
            </div>
        </div>
    </div>
    
@endsection