<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Exchange Food Recipe App</title>

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      @include('partials.navbar')
      @yield('content')
      @include('partials.footer')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
