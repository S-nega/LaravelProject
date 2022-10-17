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
{{--            @include('styles')--}}
            @include('styles')
        </style>

    </head>
    <body>
        <div class="container">
{{--            @include('menu')--}}
            @include('menu')
            <div class="main-block">
                <div class="block-header">
                    <h1>Edit Project</h1>
                </div>
                <div class="block-body">
{{--                    <form action="{{$project->id}}/edit" method="post" class="authorize-form">--}}
                    <form action="{{route('edit', ['project' => $project])}}" method="post" class="authorize-form">
                        @csrf
                        <label for="id">Edit project id</label>
                        <input type="text" id="id" placeholder="id" value="{{$project->id}}" name="id">
                        <br>
                        <label for="shortDescription">Edit project description</label>
                        <input type="text" id="description" placeholder="shortDescription" value="{{$project->shortDescription}}" name="shortDescription">
                        <br>
                        <label for="address">Edit project address</label>
                        <input type="text" id="address" placeholder="address" value="{{$project->location}}" name="location">
                        <br>
                        <label for="author">Edit project's author</label>
                        <input type="text" id="author" placeholder="author" value="{{$project->author}}" name="author">
                        <br>
{{--                        <label for="image_src">Edit image's src</label>--}}
{{--                        <input type="file" id="image_src" value="{{$project->image_src}}" name="image_src">--}}
{{--                        <input type="text" id="image_src" value="{{$project->image_src}}" name="image_src" style="visibility: hidden">--}}
{{--                        <br>--}}
                        <input type="submit" value="Save" class="authorize-button">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
