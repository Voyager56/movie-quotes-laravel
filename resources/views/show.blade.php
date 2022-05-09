@extends('components.layout')
@section('content')

<head>
<title>{{$movie->getTranslations('title')[$lang]}} Quotes</title>
</head>


<h1 class="text-4xl absolute top-[50px] left-[650px] text-white" >{{$movie->getTranslations('title')[$lang]}}</h1>


<x-language-buttons :lang="$lang" route="{{$movie->slug}}"/>



    <article class="flex flex-col items-baseline relative" >
        @foreach($movie->quotes as $quote)
            <div class="flex flex-col items-baseline mt-10 bg-white">
                <img width="500" src='{{asset('/storage/' . $movie->thumbnail)}}' alt="">
                <h2 class="text-xl max-w-[500px] p-5">"{{$quote->getTranslations('text')[$lang]}}"</h2>
            </div>
        @endforeach
    </article>

@endsection
