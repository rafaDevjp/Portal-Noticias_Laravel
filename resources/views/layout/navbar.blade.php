{{-- Navegção do SIte --}}
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="{{route('inicio')}}">
            <h3>NEWS.com</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-lg-end " id="navbarNavDropdown">

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Início <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-search" aria-hidden="true"></i> Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"></i> Config
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('formulario')}}"> Login</a>
                        <a class="dropdown-item" href="{{route('formulario')}}"> Registre-se</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('painel')}}">
                            <i class="fa fa-tachometer" aria-hidden="true"></i> Painel de Controle
                        </a>
                    </div>
                </li>


            </ul>

        </div>
    </div>
    </div>
</nav>