<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{URL::to('public/css/app.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
<footer class="py-5">
    <div class="container">
        <p class="m-0 text-center">Minden jog fenntartva &copy; Szalai Mihály 2018</p>
    </div>
    <!-- /.container -->
</footer>
</body>
<script src="{{URL::to('public/css/app.js')}}"></script>
</html>