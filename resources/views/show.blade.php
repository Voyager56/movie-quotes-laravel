@extends('components.layout')
@section('content')

<head>
<title>{{$movie->title}} Quotes</title>
</head>


<div class="mt-20">



    
    <h1 class="text-4xl   text-white" >{{$movie->title}}</h1>
    
    
    <x-language-buttons :lang="$lang" route="{{$movie->slug}}"/>
        
        
        
        <article class="flex flex-col relative" >
            @foreach($movie->quotes as $quote)
            <div class="flex flex-col items-baseline mt-10 bg-white w-fit">
                <img width="500" src='{{asset('/storage/' . $movie->thumbnail)}}' alt="">
                <h2 class="text-xl max-w-[500px] p-5">"{{$quote->text}}"</h2>
            </div>
            @endforeach
        </article>
        
</div>
@endsection
