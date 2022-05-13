@extends('components.layout')
@section('content')


<body class="flex flex-col items-center">

    {{-- @dd(app()->getLocale()) --}}

    <x-language-buttons :lang="$lang" route=""/>

    <x-movie-card :movie="$movie" :lang="$lang"/>

</body>


@endsection