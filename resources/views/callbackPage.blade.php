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
            <div class="authorization-form">
                <h1>Please leave some information to manager could contact to you</h1>
                <form action="{{route('addCallback')}}" method="post" class="authorize-form">
                    @csrf
                    <label for="name">Enter your name</label>
                    <input type="text" id="name" placeholder="name" name="name">
                    <br>

                    <label for="surname">Enter your Surname</label>
                    <input type="text" id="surname" placeholder="surname" name="surname">
                    <br>
                    <label for="phone">Enter your phone number</label>
                    <input type="number" id="phone" placeholder="8 777 000 00 00" name="phone">

                    <br>
                    <label for="description">Add some information about your flat or house</label>
                    <textarea id="description" placeholder="Address, square, style, etc" name="description"></textarea>
                    <br>
                        <input type="text" value="{{$project->id}}" name="project_id" style="visibility: hidden">
                        <input type="text" value="{{$service->id}}" name="service_id" style="visibility: hidden">

                    <input type="submit" value="Submit your application" class="authorize-button">
                </form>
            </div>
        </div>
    </body>
</html>
