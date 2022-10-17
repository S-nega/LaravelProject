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
            <h1>Add new Service</h1>
        </div>
        <div class="block-body">
            <form action="{{route('addService')}}" method="post" class="authorize-form" enctype="multipart/form-data">
                @csrf
                <label for="name">Enter Service name</label>
                <input type="text" id="name" placeholder="name" name="name">
                <br>
                <label for="description">Enter Service description</label>
                <input type="text" id="description" placeholder="shortDescription" name="description">
                <br>
                <label for="cost">Enter Service cost</label>
                <input type="text" id="cost" placeholder="cost" name="cost">
                <br>
                <input type="submit" value="Add Service" class="authorize-button">
            </form>
        </div>
    </div>
</div>
</body>
</html>
