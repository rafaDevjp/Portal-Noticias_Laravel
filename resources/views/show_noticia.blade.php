
@extends('layout/app')

@section('titulo')
     News.com | {{ Str::limit($dados->titulo, 80) }}
@endsection


@section('conteudo-dinamico')

   <section class="bg">
        <div class="container pt-5" style="min-height: 600px">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1 class="pt-5">{{$dados->titulo}}</h1>

                    <small class="text-info">
                        <i class="fa fa-user" aria-hidden="true"></i> Autor: {{ $dados->autor}} - 
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <?php echo date('d-m-Y', strtotime($dados->updated_at))?> - 
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo date(' H:i', strtotime($dados->updated_at))?>
                    </small>

                <hr>
                <p class="text-justify">{{$dados->description}}</p>
                <a href="../valor_noticias" class="btn btn-danger" title="Voltar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                {{-- <a href="edit/{{$dados->id_noticia}}" class="btn btn-primary" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a> --}}
                
            </div>
        </div>
    </div>
   </section>
    
@endsection