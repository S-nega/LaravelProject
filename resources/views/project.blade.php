<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            @include('styles')
        </style>

    </head>
    <body>
        <div class="container">
            @include('menu')
            <div class="main-block">
                <div class="block-header">
                    <h1>Project</h1>
                </div>
                <div class="block-body">
                    <ul>
                        <li>
                            <h2>{{$project->location}}</h2>
                        </li>
                        <li>
                            <h3>{{$project->author}}</h3>
                        </li>
                        <li>
                            <h4>{{$project->shortDescription}}</h4>
                        </li>
                    </ul>
                    <img src="/storage/{{$project->image_src}}">
                </div>
            </div>
        </div>
    </body>
</html>
