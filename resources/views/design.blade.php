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
                <h1>Welcome to Interior Design Studio!</h1>
            </div>
            <div class="block-body">
                Реализуемые дизайн-проекты
                <br>
                Economy, Premium, Luxury класса
                <br>
                Алматы
                <div class="moving-block">
                    @foreach($images as $image)
                        <div class="image-list-block">
                            <a href="{{route('projectP', ['project' => $image->project_id])}}">
                                <img src="storage/{{$image->image_src}}" >
                                <p>View about this project more</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
