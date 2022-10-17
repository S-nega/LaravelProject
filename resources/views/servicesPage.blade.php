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
        @include('styles');
    </style>

    </head>
    <body>
        <div class="container">
            @include('menu')
            <div class="main-block">
                <div class="block-header">
                    <h1>Our Services</h1>
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <div class="buttons-for-admin">
                            <a href="/addServiceP">Add new service</a>
                        </div>
                    @endif
                </div>
                <div class="block-body">
                    @foreach($services as $service)
                        <div class="project-block">
{{--                            <a href="{{route('serviceP', ['service' => $service])}}">--}}
                            <div class="service_info-block">
                                <h2>{{$service->name}}</h2>
{{--                                    <img src="storage/{{$service->image_src}}">--}}
                                <p>{{$service->description}}</p>
                                <h3>{{$service->cost}}</h3>
                            </div>
                            <div class="buttons-for-admin">
                                @if(\Illuminate\Support\Facades\Auth::user())
                                    <a href="{{route('editServiceP', ['service' => $service])}}">Edit Service</a>
                                    <a href="/deleteService/{{$service->id}}">Delete Service</a>
                                @else
                                    <a href="{{route('callbackP', ['project' => 0, 'service' => $service->id])}}">I want such service</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
