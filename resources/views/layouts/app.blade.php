<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ (asset('css/app.css'))}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Familia Moderna</title>
        <meta name="csrf-token" content="{ { csrf_toke() } }">
    </head>
    <style>
        .container{
            margin-top:80px;
            margin-bottom:80px;
        }
    </style>
    <body>
    @component('../componentes/navBar', ["current" => $current])
        @endcomponent
        <div class="container">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif    
            </mains>
        </div>
    </body>
</html>