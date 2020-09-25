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

{{-- BLOCO DE NOTICIAS EM DESTAQUE --}}

<div class="container p-1"> 
    <div class="row justify-content-center pt-4">
               
                @php
                    $cont=0; //variavel adiciona um novo valor de ID para a noticia 
                    foreach ($noticia_destaque as $noticia) {
                                
                            $cont;  ///ID recebe novo valor cont
                        
                            if ($cont ==0){
                                $id_noticia1 = $noticia->id_noticia;
                                $destaque1 = $noticia->titulo; //ID_noticia
                            }//
                            if ($cont ==1){
                                $id_noticia2 = $noticia->id_noticia;
                                $destaque2 = $noticia->titulo; //ID_noticia
                            }//
                            if ($cont ==2){
                                $id_noticia3 = $noticia->id_noticia;
                                $destaque3 = $noticia->titulo; //ID_noticia
                            }//
                        
                            $cont++; //cont recebe mail 1 
                    }  
                @endphp 
       
        <div class="col-lg-6 bg_destaque_1 p-0 destaque " style="height: 600px;">
            {{-- <img src="" alt="img-test" srcset=""> --}}
            <div  class="texto d-flex align-items-end p-4">
                 <a href="valor_noticias/{{$id_noticia1}}" class="text-decoration-none text-white">
                 <h3>{{$destaque1 ?? ""}}</h3>
                    </a>
                
            </div>
        </div>

        <div id="coluna2" class="col-lg-6 pl-2 pr-0">

            <div href="" id="dt1" class="bg_destaque_2 destaque " style="height: 296px;" >
                {{-- <img src="" alt="img-test" srcset=""> --}}
                <div class="texto d-flex align-items-end p-4">
                    <a href="valor_noticias/{{$id_noticia2}}" class="text-decoration-none text-white">
                        <h3 >{{$destaque2 ?? ""}}</h3>
                    </a>
                </div>
            </div>

            <div id="dt2"  class="bg_destaque_3 mt-2 destaque " style="height: 296px;">
                {{-- <img src="{{URL::asset('/imagens/img1.jpg')}}" alt="img-test" srcset=""> --}}
               <div class="texto d-flex align-items-end p-4">
                   
                     <a href="valor_noticias/{{$id_noticia3}}" class="text-decoration-none text-white">
                        <h3>{{$destaque3 ?? ""}}</h3>
                    </a>
                </div>
               
            </div>

        </div>

    </div>
</div> 
{{----//END BLOCO DE NOTICIAS EM DESTAQUE-------}}
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
                                    <a class="text-decoration-none font-weight-bold text-dark" href="valor_noticias/{{$dado->id_noticia}}">{{$dado->titulo}}</a>
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
        <div class="col-lg-3 bg-light p-0">
                    
                    @include('card_covid')
                    @include('card_loteria')
                    @include('card_tempo')

            <div class="card  mb-3" >
                <div class="card-header bg_card-1 text-white font-weight-bold" >Horóscopos</div>
                <div class="card-body text-center text-danger">
                    <script async src="//widget.horoscopovirtual.com.br/js/horoscopo.js?background=ffffff&color=ff335e&border=ffffff&text=585ca9&font=roboto&width=227"></script>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection





