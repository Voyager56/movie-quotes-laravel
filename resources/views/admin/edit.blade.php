@extends('components.admin-layout')
@section('content')


<form id="movie-update" action="{{$movie->slug}}" method="POST" enctype="multipart/form-data" class="flex flex-col items-center">
    @csrf
</form>



<div class="flex flex-col items-center">

    
    <h1 class="text-white text-2xl my-10">Edit A Movie</h1>
    <div class="mb-6 flex flex-col items-center ">
        <label form="movie-update" for="title" class="block mb-2 uppercase font-bold text-xs text-white">Title</label>
        <input form="movie-update" type="text" name="title" id="title" class="border border-gray-400 p-2 text-black" value="{{$movie->getTranslations('title')['en']}}" required>

        @error('title')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6 flex flex-col items-center ">
        <label form="movie-update" for="title_ge" class="block mb-2 uppercase font-bold text-xs text-white">სათაური</label>
        <input form="movie-update" type="text" name="title_ge" id="title_ge" class="border border-gray-400 p-2 text-black" value="{{$movie->getTranslations('title')['ka']}}" required>
        
        @error('title_ge')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6 flex flex-col items-center ">
        <label form="movie-update" for="thumbnail" class="block mb-5 uppercase font-bold text-xs text-white">Current Thumbnail: 
            <img class="mt-3" width="150" src="{{asset('/storage/' . $movie->thumbnail)}}" alt="movie thumbnail">
        </label>
        <input form="movie-update" name="thumbnail" id="thumbnail" type="file" class="border border-gray-400 p-2 text-white">

        
        @error('thumbnail')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>


    @foreach ($movie->quotes as $quote)

    
    <form  class="bg-white rounded p-5 flex justify-between mb-10 w-[300px] " method="POST" action="/admin/movies/{{ $movie->slug }}/{{$quote->id}}">
        @csrf
        @method('delete')
        <div>
            <p>Quote: {{$quote->getTranslations('text')['en']}}</p>
            <p>ციტატა: {{$quote->getTranslations('text')['ka']}}</p>
        </div>
        <button type="submit" class=" m-5 text-xs text-gray-400">Delete</button>
    </form>
    @endforeach

    <div class="bg-white rounded-xl p-5 m-5">
        <form id="quote-create" action="{{$movie->slug}}/create" method="POST" enctype="multipart/form-data" class="flex flex-col items-center">
            @csrf
            <div class="mb-6 flex flex-col items-center ">
                <label for="ka" class="block mb-2 uppercase font-bold text-xs text-black">ციტატა</label>
                <input type="text" name="ka" id="ka" class="border border-gray-400 p-2 text-black" required>
            </div>
            <div class="mb-6 flex flex-col items-center ">
                <label for="en" class="block mb-2 uppercase font-bold text-xs text-black">Quote</label>
                <input type="text" name="en" id="en" class="border border-gray-400 p-2 text-black" required>
            </div>
            <button type="submit" class=" m-5 text-xs text-blue-400">Add Quote</button>
        </form>
    </div>

    
    <button form="movie-update" type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blur-500">
        Submit
    </button>
</div>



@endsection