<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Lista</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{url('assecs/stilo.css')}}">
    </head>
    <body>
        <div class="conteiner">
    @yield('content')
        </div>


        @stack('script')
    </body>
</html>
