@extends('layout/app')

<style>
    .bg_destaque_1{background:url("{{URL::asset('/imagens/img1.jpg')}}")no-repeat; background-size: cover;}
    .bg_destaque_2{background:url("{{URL::asset('/imagens/img2.jpg')}}")no-repeat; background-size: cover;}
    .bg_destaque_3{background:url("{{URL::asset('/imagens/img3.jpg')}}")no-repeat; background-size: cover;}

    
</style>


@php  
    // Modulo gerador aleatorio do nome da imagen 
    $characters='1234';
    $foto = $characters[Rand('1', strlen($characters))];
    echo $img ='img'.$foto.'.jpg';   
@endphp


@section('conteudo-dinamico')

<div class="container p-1">
    <div class="row justify-content-center">

        <div class="col-lg-6 bg_destaque_1 p-0 destaque " style="height: 600px;">
            {{-- <img src="" alt="img-test" srcset=""> --}}
            <div  class="texto d-flex align-items-end p-4">
                 <a href="#" class="text-decoration-none text-white">
                        <h3>Cariocas e turistas voltam a ocupar areias das praias com cadeiras e barracas em feriadão de sol no Rio</h3>
                    </a>
                
            </div>
        </div>

        <div id="coluna2" class="col-lg-6 pl-1 pr-0">

            <div href="" id="dt1" class="bg_destaque_2 destaque " style="height: 298px;" >
                {{-- <img src="" alt="img-test" srcset=""> --}}
                <div class="texto d-flex align-items-end p-4">
                    <a href="#" class="text-decoration-none text-white">
                        <h3 >Manifestantes fazem carreata em favor da Lava Jato em São Paulo</h3>
                    </a>
                </div>
            </div>

            <div id="dt2"  class="bg_destaque_3 mt-1 destaque " style="height: 298px;">
                {{-- <img src="{{URL::asset('/imagens/img1.jpg')}}" alt="img-test" srcset=""> --}}
               <div class="texto d-flex align-items-end p-4">
                   
                     <a href="#" class="text-decoration-none text-white">
                        <h3>Portugal tem maior número diário de casos de coronavírus desde maio</h3>
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
                <div class="card mb-3 shadow-sm " style="">
                    <div class="row no-gutters">
                        <div class="col-md-6  p-0">
                        <a href="valor_noticias/{{$dado->id_noticia}}"><img src=" {{URL::asset('imagens/'. $img)}}" class="card-img img-fluid" alt="{{$dado->titulo}}"></a>
                        </div>
                        <div class="col-md-6  bg-light">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-decoration-none " href="valor_noticias/{{$dado->id_noticia}}">{{$dado->titulo}}</a>
                                </h5>
                                <p class="card-text">{{ Str::limit($dado->description, 70) }}</p>
                                <p class="card-text"><small class="text-muted">{{$dado->updated_at}} - Categoria: Exemple</small></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-3 bg-light">
              parte lateral
        </div>

    </div>

</div>

@endsection