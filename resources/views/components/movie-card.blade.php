@props(['movie','lang'])

{{--@dd(app()->getLocale())--}}

<article class="p-5 mt-10 flex flex-col items-center">
    <img src="{{$movie->thumbnail}}" alt="movie poster" width="500">
    <h3 class="text-white p-5 text-2xl">{{$movie->quotes->first()->getTranslations('text')[$lang]}}</h3>
    <a class="text-white underline text-xl" href="/{{$lang}}/{{$movie->slug}}">{{$movie->getTranslations('title')[$lang]}}</a>
</article>
