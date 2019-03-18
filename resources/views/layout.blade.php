<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Custom  Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       {!! style_ts('/css/app.css') !!}
        <!-- Styles -->
       
    </head>
    <body id="@yield('body_id')">
        <div id="app">
            @include('layout.sidebar')
            <main>
                @yield('content')
            </main>
        </div>

        {!! script_ts('/js/app.js') !!}
    </body>
</html>
