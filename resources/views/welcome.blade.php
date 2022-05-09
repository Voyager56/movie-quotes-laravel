<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Movie Quotes</title>
    <style>
        html{
            background: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%);
        }
    </style>
</head>
<body class="flex flex-col items-center">



{{--    <div class="flex flex-col absolute left-5 h-[90vh] justify-center">--}}
{{--        <a href="/en" class="border rounded-full p-3" style="background-color: {{$lang == 'en' ? "white" : "none"}}">en</a>--}}
{{--        <a href="/ka" class="border rounded-full p-3" style="background-color: {{$lang == 'ka' ? "white" : "none"}}">ka</a>--}}
{{--    </div>--}}

    <x-language-buttons :lang="$lang" route=""/>

    <x-movie-card :movie="$movie" :lang="$lang"/>

</body>
</html>
