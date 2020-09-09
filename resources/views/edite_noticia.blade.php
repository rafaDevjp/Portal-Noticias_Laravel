@extends('layout/app')

@section('titulo')
News | Editar Notícia
@endsection


@section('conteudo-dinamico')

@foreach ($dados as $valor)

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-6 border shadow p-3 bg-info card">
            <form action="{{ url('valor_noticias/' . $valor->id_noticia) }}" method="POST">

                <div class="p-3 border card">
                    <div class="col-12 text-center p-3">
                        <h4>Editar conteúdo da notícia</h4>
                    </div>
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" value="{{$valor->titulo}}" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Autor</label>
                        <input type="text" class="form-control" value="{{$valor->autor}}" name="autor" required>
                    </div>
                    <div class="form-group">
                        <label for="">Texto da Notícia</label>
                        <textarea name="texto" cols="30" rows="10" class="form-control" required>
                        {{$valor->description}}
                        </textarea>
                    </div>

                    <div class="form-group text-center">
                        <label for=""></label>
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <a href="{{route('painel')}}" class="btn btn-danger">Voltar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endforeach

@endsection