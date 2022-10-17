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
            <form action="{{route('order', ['readyRequest' => $readyRequest])}}" method="post" class="authorize-form">
                @csrf
                We saved project which you selected!
                <input type="text" id="project_id" value="{{$project->id}}" style="visibility: hidden">
                @foreach($questionLists as $question)
                    <label for="question">{{$question->text}}</label>
                    <input type="text" id="question" placeholder="text your answer" value="{{$question->answer}}" name="question">
                @endforeach
                    <input type="submit" value="Send" class="authorize-button">
            </form>
        </div>
    </div>
</div>
</body>
</html>
