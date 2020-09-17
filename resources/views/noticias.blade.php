@extends('layout/app')

@section('titulo')
     Página | Início 
@endsection

<style>
    .bg_destaque_1{background:url("{{URL::asset('/imagens/img1.jpg')}}")no-repeat; background-size: cover;}
    .bg_destaque_2{background:url("{{URL::asset('/imagens/img2.jpg')}}")no-repeat; background-size: cover;}
    .bg_destaque_3{background:url("{{URL::asset('/imagens/img3.jpg')}}")no-repeat; background-size: cover;}  
</style>




@section('conteudo-dinamico')

<div class="container p-1">
    <div class="row justify-content-center pt-4">
               
                @php
                    $cont=0; //variavel adiciona um novo valor de ID para a noticia 
                    foreach ($noticia_destaque as $noticia) {
                                
                            $cont;  ///ID recebe novo valor cont
                        
                            if ($cont ==0){
                                $destaque1 = $noticia->titulo;
                            }//
                            if ($cont ==1){
                                $destaque2 = $noticia->titulo;
                            }//
                            if ($cont ==2){
                                $destaque3 = $noticia->titulo;
                            }//
                        
                            $cont++; //cont recebe mail 1 
                    }  
                @endphp 
       
        <div class="col-lg-6 bg_destaque_1 p-0 destaque " style="height: 600px;">
            {{-- <img src="" alt="img-test" srcset=""> --}}
            <div  class="texto d-flex align-items-end p-4">
                 <a href="#" class="text-decoration-none text-white">
                 <h3>{{$destaque1 ?? ""}}</h3>
                    </a>
                
            </div>
        </div>

        <div id="coluna2" class="col-lg-6 pl-1 pr-0">

            <div href="" id="dt1" class="bg_destaque_2 destaque " style="height: 298px;" >
                {{-- <img src="" alt="img-test" srcset=""> --}}
                <div class="texto d-flex align-items-end p-4">
                    <a href="#" class="text-decoration-none text-white">
                        <h3 >{{$destaque2 ?? ""}}</h3>
                    </a>
                </div>
            </div>

            <div id="dt2"  class="bg_destaque_3 mt-1 destaque " style="height: 298px;">
                {{-- <img src="{{URL::asset('/imagens/img1.jpg')}}" alt="img-test" srcset=""> --}}
               <div class="texto d-flex align-items-end p-4">
                   
                     <a href="#" class="text-decoration-none text-white">
                        <h3>{{$destaque3 ?? ""}}</h3>
                    </a>
                </div>
               
            </div>

        </div>

    </div>
</div>
<hr>
<div class="container p-0">
    <div class="row  ">
      
        <div class="col-lg-9 pl-0">
            @foreach ($dados as $dado)

                @if ($dado->visivel == 1)
                    
               
                <div class="card mb-3 shadow-sm " >
                    <div class="row no-gutters">
                        <div class="col-md-6  p-0">
                        <a href="valor_noticias/{{$dado->id_noticia}}"><img src=" {{URL::asset('imagens/img4.jpg')}}" class="card-img img-fluid" alt="{{$dado->titulo}}"></a>
                        </div>
                        <div class="col-md-6  bg-light">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-decoration-none " href="valor_noticias/{{$dado->id_noticia}}">{{$dado->titulo}}</a>
                                </h5>
                                <p class="card-text">{{ Str::limit($dado->description, 110) }}</p>
                                <p class="card-text"><small class="text-muted">{{$dado->updated_at->diffForHumans()}} - Categoria: {{$dado->categoria}} </small></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 @endif
            @endforeach
        </div>
        <div class="col-lg-3 bg-light">
              parte lateral
        </div>

    </div>

</div>

@endsection