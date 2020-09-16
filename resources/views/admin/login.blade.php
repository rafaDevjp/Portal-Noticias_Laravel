@extends('layout/base')
@section('titulo')
      News | Admin
@endsection



  
<section>
          {{------------------------NAVBAR_CODE--------------------------}}
    <nav class="navbar navbar-light  bg_card-2 p-3 shadow">
        <a class=" navbar-brand text-white" href="{{route('inicio')}}"><h1>News<small>.com</small></h1></a>
        <form class="form-inline my-2 my-lg-0 pr-4" action="login" method="POST">
            @csrf
            <div class="col-lg-12">
                
                <div class="row align-items-center">
                    
                    <div class="form-group col-lg-5">
                        
                        <input type="text"  name="usuario" class="form-control form-control-sm" required placeholder="Nome/Email">
                    </div>
        
                    <div class="form-group col-lg-5 ">
                      
                        <input type="password" name="senha" class="form-control form-control-sm" required placeholder="Senha" >
                    </div>
        
                    <div class="col-lg-1 form-group  ">
                        <input type="submit" class="btn btn-success btn-sm  " value="Entrar">
                    </div>
                </div>
            </div>
        
        </form>
    </nav>

    {{----------------------END_CODE_NAVBAR------------------------}}

    {{------------------------START-BODY_BANNER-------------------------}}

    <div class="container-fluid  bg_card-2" style="min-height: 700px">
        <div class="row justify-content-end">

            <div  class="col-lg-6  align-self-center news">
                <span class="">
                    <h1 class="">NEWS<small>.com</small></h1>
                    <p class="">A verdade em tudo que se lê.</p>
                </span>
            </div>

            <div class="col-lg-5  text-white rounded-lg p-3">
                {{-----Validação-do formulario -----}}

             
               @if (count($errors)!= 0)
                    @foreach ($errors->all() as $erro)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Atenção!</strong> {{$erro}}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
               @endif
               @if (($feed ?? '')==1)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Parabens!</strong> Seu perfil foi cadastrado com sucesso!!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
               @endif
               @if (($feed ?? '')==2)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Atenção!</strong> Login Invalido ou não existe!.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
               @endif
               {{-----------------------------------}} 
                
                </form>
              

                <form  action="registro" method="POST">
                    @csrf
                    <div class="col-lg-12 pt-5 ">
                        <div class="row justify-content-end">
                            
                            
                                <div class="col-lg-9 border p-5 rounded-lg">

                                    <div class="text-center">
                                        <h2>Criar Perfil</h2>
                                    </div>

                                    <div class="form-group ">
                                        <label>Nome:</label>
                                        <input type="text" class="form-control" name="usuario">
                                    </div>
                        
                                    <div class="form-group  ">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="form-group ">
                                        <label>Telefone:</label>
                                        <input type="tel" class="form-control" name="telefone">
                                    </div>
                        
                                    <div class="form-group  ">
                                        <label>Senha:</label>
                                        <input type="password" class="form-control" name="senha">
                                    </div>
                        
                                    <div class="form-group text-center pt-3">
                                        <input type="submit" class="btn btn-success btn-block" value="Cadastrar Perfil">
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>

         <div class="text-center p-3">
             <hr>
            <span class="text-light ">&copy; @php echo date('Y') @endphp - NEWS.com</span>
         </div>
    </div>

    {{--------------------------------END-BORY-BANNER------------------------------------}}
   
</section>

