<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        <!-- Fonts -->
        <!-- Styles -->

    </head>
    <body>
        <div id="app"><app></app></div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>

