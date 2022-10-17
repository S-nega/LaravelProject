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
            <h1>Edit Service</h1>
        </div>
        <div class="block-body">
            <form action="{{route('editService', ['service' => $service])}}" method="post" class="authorize-form" enctype="multipart/form-data">
                @csrf
                <label for="name">Edit Service name</label>
                <input type="text" id="name" placeholder="name" value="{{$service->name}}" name="name">
                <br>
                <label for="description">Edit Service description</label>
                <input type="text" id="description" placeholder="description" value="{{$service->description}}" name="description">
                <br>
                <label for="cost">Edit Service cost</label>
                <input type="text" id="cost" placeholder="cost" value="{{$service->cost}}" name="cost">
                <br>
                <input type="submit" value="Edit Service" class="authorize-button">
            </form>
        </div>
    </div>
</div>
</body>
</html>
