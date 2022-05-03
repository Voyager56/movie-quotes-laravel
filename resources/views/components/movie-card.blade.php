@props(['movie'])

<article>
    <img src="{{$movie->thumbnail}}" alt="movie poster">
    <h3>{{$movie->quotes->first()}}</h3>
    <a href="#">{{$movie->title}}</a>
</article>
