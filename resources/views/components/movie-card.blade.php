@props(['movie','lang'])


<article class="p-5 mt-10 flex flex-col items-center">
    <img src="{{asset('/storage/' . $movie->thumbnail)}}" alt="movie poster" width="500">
    <h3 class="text-white p-5 text-2xl">{{$movie->quotes->first()->text}}</h3>
    <a class="text-white underline text-xl" href="{{route('movie.show'), $movie->slug}}">{{$movie->title}}</a>
</article>
