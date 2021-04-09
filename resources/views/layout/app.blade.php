<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Graphix - Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        html {
            padding: 0px;
            margin: 0px;
        }
        body {
            padding-top: 90px;
        }
    </style>
</head>
<body>
    <div class="container">
        @component('navbar', ["current" => $current])
            
        @endcomponent
        <main role="main">
            @hasSection ('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>