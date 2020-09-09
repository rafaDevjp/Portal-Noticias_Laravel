<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'app.blade')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
    <link href="{{URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <div>
        @include('layout/navbar')
    </div>
    <section>
        @yield('conteudo-dinamico')
    </section>

    <div>
        @include('layout/footer')
    </div>

    <script src="{{ URL::asset('/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>

    
</body>

</html>