@extends('layout/app')


@section('conteudo-dinamico')
<h1>View Edite Noticia</h1>
{{$dados}}




 {!! Form::open( array('url' => 'edit/' . $dados->id_noticia, 'method' =>'put')) !!}
        {!! Form::text('nome', $dados->titulo,  array('class' => '')) !!}
        {!! Form::text('autor', $dados->autor,  array('class' => 'form-control')) !!}
        {!! Form::textarea('texto', $dados->decription, [$options]) !!}
        {!! Form::submit('salvar Alteraçoes', array('class' => 'btn btn-success') [$options]) !!}
{!! Form::close() !!}
        {{-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 border shadow p-3">
                     <form action="" method="post">
                         <div class="form-group">
                             <label for="">Titulo</label>
                            <input type="text" class="form-control" value="" name="titulo" required>
                         </div>
                         <div class="form-group">
                             <label for=""></label>
                             <input type="text" class="form-control" value="" name="autor" required>
                         </div>
                         <div class="form-group">
                             <label for=""></label>
                             <textarea name="texto" value="" required></textarea>
                         </div>
                     </form>
                </div>
            </div>
        </div> --}}

        
    
@endsection