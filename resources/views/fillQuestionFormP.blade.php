<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<!--{{--        <link href="/resources/css/styles.css" rel="stylesheet">--}}-->

        <style>
            @include('styles')
        </style>

    </head>
    <body>
        <div class="container">
            @include('menu')
            <div class="authorization-form">
                <h1>Please leave some information to manager could form your project</h1>
                <form action="{{route('addFillQuestionForm', ['questionsList' => $questionsList])}}" method="post" class="authorize-form">
                    @csrf
                        @foreach($questionsList as $question)
                            <label for="description">{{$question->description}}</label>
                            <input type="text" id="name" placeholder="name" value="{{$readyRequests->$question->answer}}" name="{{$question->answer}}" >
                            <br>
                        @endforeach
                    <input type="submit" value="Submit your application" class="authorize-button">
                </form>
            </div>
        </div>
    </body>
</html>
