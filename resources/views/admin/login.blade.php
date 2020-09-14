@extends('layout/base')
@section('titulo')
      News | Admin
@endsection



    {{------------------------NAVBAR_CODE--------------------------}}
<section>
    <nav class="navbar navbar-light  bg_card-2 p-3 shadow">
        <a class=" navbar-brand text-white" href="{{route('inicio')}}"><h1>News<small>.com</small></h1></a>
        <form class="form-inline my-2 my-lg-0 pr-4" action="registro" method="POST">
            @csrf
            <div class="col-lg-12">
                
                <div class="row align-items-center">
                    
                    <div class="form-group col-lg-5">
                        
                        <input type="text" class="form-control form-control-sm" required placeholder="Nome/Email" name="nome">
                    </div>
        
                    <div class="form-group col-lg-5 ">
                      
                        <input type="password" class="form-control form-control-sm" required placeholder="Senha" name="senha">
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

            <div class="col-lg-5  text-white rounded-lg p-5">
               
                <form  action="registro" method="POST">
                    @csrf
                    <div class="col-lg-12 pt-3 ">
                        <div class="row justify-content-end">
                            
                            
                                <div class="col-lg-10 border p-5 rounded-lg">

                                    <div class="text-center">
                                        <h2>Cadastrar</h2>
                                    </div>

                                    <div class="form-group ">
                                        <label>Nome</label>
                                        <input type="text" class="form-control " required name="usuario">
                                    </div>
                        
                                    <div class="form-group  ">
                                        <label>Email</label>
                                        <input type="text" class="form-control " required name="email">
                                    </div>
                                    <div class="form-group ">
                                        <label>Telefone</label>
                                        <input type="tel" class="form-control " required name="tel">
                                    </div>
                        
                                    <div class="form-group  ">
                                        <label>Senha</label>
                                        <input type="password" class="form-control " required name="senha">
                                    </div>
                        
                                    <div class="form-group text-center pt-2">
                                        <input type="submit" class="btn btn-success btn-block" value="Cadastrar Perfil">
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>

         <div class="text-center ">
             <hr>
            <span class="text-light p3">&copy; @php echo date('Y') @endphp - NEWS.com</span>
         </div>
    </div>

    {{--------------------------------END-BORY-BANNER------------------------------------}}
   
</section>

