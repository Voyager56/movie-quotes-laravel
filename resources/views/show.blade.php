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
        body{
            height: 100vh;
        }
    </style>
    <title>{{$movie->title}} Quotes</title>
</head>
<body class="flex flex-col items-center justify-center">
<h1 class="text-4xl absolute top-[50px] left-[650px] text-white" >{{$movie->title}}</h1>

<article class="flex flex-col items-baseline relative" >
        @foreach($movie->quotes as $quote)
            <div class="flex flex-col items-baseline mt-10 bg-white">
                <img width="500" src='{{$movie->thumbnail}}' alt="">
                <h2 class="text-xl max-w-[500px] p-5">"{{$quote->text}}"</h2>
            </div>
        @endforeach
    </article>



</body>
</html>
