<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html{
            background: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%);
        }
    </style>
</head>
<body>
    @yield('content')

    <div class="my-5 mx-8">
        {{$movies->links()}}
    </div>


    @if (session()->has('message'))
        <div
            class="fixed bottom-3 right-3 rounded-xl bg-blue-700 text-white text-slim p-3">
            <p>{{session('message')}}</p>
        </div>
    @endif  
</body>
