@extends('layout/app')


@section('conteudo-dinamico')
<h2 class="p-5">View Noticias</h2>
<div class="container">
    <div class="row">
        @foreach ($dados as $dado)

        <div class="card col-4 p-3">
            <h5>{{ $dado->titulo}} </h5>
            <hr>
            <small>
                Por: {{$dado->autor}}
            </small>

        <p>{{ Str::limit($dado->description, 50) }}</p>
        
        <a style="bottom: 10px; position: absolute; padding-top:10px " href="valor_noticias/{{$dado->id_noticia}}"> Saiba mais</a>
        </div>

        @endforeach
    </div>
    <a  href="formularios" class="btn btn-outline-success mt-4">Adicionar nova Noticia</a>
</div>

@endsection