<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{--        <link href="/resources/css/styles.css" rel="stylesheet">--}}

        <style>
            @include('styles')
        </style>

    </head>
    <body>
        <div class="container">
        @include('menu')
            <h1>Your Application submitted success! Wait for a call from manager during one work day.</h1>
        </div>
    </body>
</html>
