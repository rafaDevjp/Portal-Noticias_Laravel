@extends('layout/app')

@section('titulo')
    News | Adicionar Notícia
  @endsection




@section('conteudo-dinamico')
<section>
    <div class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-lg-11  p-4  ">
                <div class="text-center text-success">
                    <h3 class="p-3">Escreva uma nova noticia</h3>
                    <hr>
                </div>
                <form action="valor_noticias" method="post" >
                    @csrf

                    <div class="row  justify-content-center"> {{--linha --}}

                        <div class="col-lg-5">
                            <!-- coluna-1 -->
                            <div class="form-group">
                                <label for="">Titulo da Notícia</label>
                                <input type="text" class="form-control" name="titulo" id="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Autor(a)</label>
                                <input type="text" class="form-control" name="autor" id="" required>
                            </div>
                             <div class="form-group">
                                <label for="inputCategoria">Categorias</label>
                                <select id="inputCategoria" class="form-control" name="categoria">
                                    <option selected>Selecione...</option>
                                    <option value="Política">Política</option>
                                    <option value="Tempo">Clima-Tempo</option>
                                    <option value="Meio Ambiente">Meio Ambiente</option>
                                    <option value="Saúde">Saúde</option>
                                    <option value="Ecônomia">Ecônomia</option>
                                    <option value="Esportes">Esportes</option>
                                    <option value="Mundo">Mundo</option>
                                    <option value="Cultura">Cultura</option>
                                </select>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="visivel" checked>
                                <label class="form-check-label" for="exampleCheck1">Tornar visivel ?</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="destaque" >
                                <label class="form-check-label" for="exampleCheck1">Classificar como destaque ?</label>
                            </div>
                            {{-- <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="">
                                <label class="form-check-label" for="exampleCheck1">Classificar como destaque ?</label>
                            </div> --}}
                            <div class="form-group card pt-2 h-25">
                                <label for="exampleFormControlFile1">Adicionar Imagens</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="arquivo[]" multiple>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <!-- coluna-2 -->
                            <div class="form-group">
                                <label for="">Texto da Notícia</label>
                                <textarea name="texto" class="form-control" id="" cols="30" rows="17"
                                    required></textarea>
                            </div>
                           
                        </div>
                        <div class="form-group col-lg-10 ">
                            <input type="submit" class="btn btn-outline-success btn-block" value="Salvar Notícia">
                        </div>
                    </div>
                   
                    @php
                    echo $feed ?? '';
                    @endphp
                </form>
                <a href="{{route('painel')}}">Voltar</a>

            </div>
        </div>
    </div>
</section>
@endsection

