<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            <h1>Edit Question</h1>
        </div>
        <div class="block-body">
            <form action="{{route('editQuestion', ['questionsList' => $questionsList])}}" method="post" class="authorize-form" enctype="multipart/form-data">
                @csrf
                <label for="description">Enter question description</label>
                <input type="text" id="description" placeholder="description" value="{{$questionsList->description}}" name="description">
                {{--                <input type="text" id="description" placeholder="shortDescription" name="description">--}}
                <br>
                <label for="answer">Enter same answer to your question</label>
                <input type="text" id="answer" placeholder="answer" value="{{$questionsList->answer}}" name="answer">
{{--                <input type="text" id="answer" placeholder="answer" name="answer">--}}
                <br>
                <input type="submit" value="Edit question" class="authorize-button">
            </form>
        </div>
    </div>
</div>
</body>
</html>
