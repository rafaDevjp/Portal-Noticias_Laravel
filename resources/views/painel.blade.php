

@extends('layout/app')

    @section('titulo')
    News | Dashboard
    @endsection


@section('conteudo-dinamico')

 <section class="bg-dashboard-gradiente" style="">

         
        <div class="container-fluid" >
            <div class="row"> {{--LINHA-1--}}
                <div class="col-lg-6">
                    <h1 class=" p-3"><i class="fa fa-tachometer text-warning" aria-hidden="true"></i> PAINEL DE CONTROLE</h1>
                </div>
                <div class="col-lg-6 text-right">
                    <h5 class=" p-3"><i class="fa fa-id-card-o fa-1x text-warning" aria-hidden="true"></i> Nome do usuario Logado</h5>
                </div>
            </div>

            <hr>

            {{--BLOCO DE CARTÕES COM VALORES DE ESTATÍSTICA--}}
            <div class="row p-5 justify-content-center">{{--LINHA-2--}}
                <div class="card text-white bg_card-2 m-2" style="min-width: 17rem;">
                  <div class="card-header"><i class="fa fa-newspaper-o " aria-hidden="true"></i> Matérias On-line</div>
                    <div class="card-body text-center">
                        <h3 class="card-title"><span ><i class="fa fa-eye" aria-hidden="true"></i> Total de: @php echo $count = count($dados) @endphp</span></h3>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card text-white bg_card-1 m-2" style="min-width: 17rem;">
                  <div class="card-header"><i class="fa fa-newspaper-o " aria-hidden="true"></i> Matérias Offline</div>
                    <div class="card-body text-center">
                        <h3 class="card-title"><span ><i class="fa fa-eye-slash" aria-hidden="true"></i> Total de: @php echo $count = count($dados) @endphp</span></h3>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card text-white bg_card-3 m-2" style="min-width: 17rem;">
                  <div class="card-header"><i class="fa fa-newspaper-o " aria-hidden="true"></i> Médias de publicações Semanais</div>
                    <div class="card-body text-center">
                        <h3 class="card-title"><span ><i class="fa fa-line-chart" aria-hidden="true"></i> Média de: @php echo $count = count($dados) @endphp.8</span></h3>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card text-white bg_card-4 m-2" style="min-width: 17rem;">
                  <div class="card-header"><i class="fa fa-newspaper-o " aria-hidden="true"></i> Média de publicações Mensais</div>
                    <div class="card-body text-center">
                        <h3 class="card-title"><span ><i class="fa fa-line-chart" aria-hidden="true"></i> Média de: @php echo $count = count($dados) @endphp</span></h3>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
           {{-- END_BLOCO DE CARTÕES --}}


            <div class="row justify-content-center" > {{--LINHA-3--}}
              <div id="listaNoticia" class="col-lg-6 card shadow p-3 m" > {{--Coluna-1--}}
                <h2 class="p-2 text-primary text-center"><i class="fa fa-th-list" aria-hidden="true"></i> Lista de Notícias Cadastradas </h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tiulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados as $dado)
                            <tr>
                            <th scope="row">{{$dado->id_noticia}}</th>
                            <td>{{ Str::limit($dado->titulo, 50)}}...</td>
                            <td> {{$dado->autor}} </td>
                            <td class="text-center" title="Editar">
                                <a href="valor_noticias/edit/{{$dado->id_noticia}}"><i class="fa fa-pencil p-2 " aria-hidden="true"></i></a>
                            </td>
                            <td class="text-center" title="Deletar">
                                <a href="" ><i class="fa fa-minus-circle text-danger p-2" aria-hidden="true"></i></a>
                            </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            <div class=" col-lg-5 ">{{--COLUNA-2--}}
                <div class="col-lg-12 card shadow p-3 mb-3" style="max-height: 350px">{{--COLUNA-2--}}
                    <h2 class="p-2 text-primary text-center"><i class="fa fa-trophy" aria-hidden="true"></i> Notícias em Destaque</h2>
                     <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tiulo</th>
                        <th scope="col">Autor</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados as $key => $dado)
                            
                                <tr>
                                    <th scope="row">{{$dado->id_noticia}}</th>
                                    <td class="p-2">{{ Str::limit($dado->titulo, 50)}}...</td>
                                    <td class="p-2"> {{$dado->autor}} </td>
                                </tr>
                                @php
                                  if ($key >= 2)break;//limitador de consutas do FOREACH
                                @endphp 
                        @endforeach 
                         
                    </tbody>
                </table>
            </div>

            <div class="col-lg-12 card shadow p-3 mb-3">
                <h2 class="p-2 text-primary text-center"><i class="fa fa-paperclip" aria-hidden="true"></i> Adicionar Material</h2>
                <hr>
                    <div class="card-body text-center">
                        <p class="card-text text-dark">Clique no botão para Adicionar uma nova material</p>
                       <a href="{{route('formulario')}}" class="btn btn-primary">Novo Material</a>
                    </div>
            </div>

            </div>

        </div>
    </div>
 </section>
@endsection    
