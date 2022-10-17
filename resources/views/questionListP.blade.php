<!DOCTYPE html>
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
            <h1>Questions</h1>
            @if(\Illuminate\Support\Facades\Auth::user())
                <div class="buttons-for-admin">
                    <a href="/addQuestionP">Add new Question</a>
                </div>
            @endif
        </div>
        <div class="block-body">
            @foreach($questionsList as $question)
                <div class="question-block">
                    <label for="question">{{$question->description}}</label>
                    <p id="question">{{$question->answer}}</p>
                    <div class="buttons-for-admin">
                        <a href="/editQuestionP/{{$question->id}}">Edit Question</a>
                        <a href="/deleteQuestion/{{$question->id}}">Delete Question</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
