@extends('components.admin-layout')
@section('content')


<form action="movie" method="POST" enctype="multipart/form-data" class="flex flex-col items-center">
    @csrf
    <h1 class="text-white text-2xl my-10">Add A New Movie</h1>
    <div class="mb-6 flex flex-col items-center ">
        <label for="title" class="block mb-2 uppercase font-bold text-xs text-white">Title</label>
        <input type="text" name="title" id="title" class="border border-gray-400 p-2 text-black" value="{{$movie->getTranslations('title')['en']}}" required>

        @error('title')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-6 flex flex-col items-center ">
        <label for="title_ge" class="block mb-2 uppercase font-bold text-xs text-white">სათაური</label>
        <input type="text" name="title_ge" id="title_ge" class="border border-gray-400 p-2 text-black" value="{{$movie->getTranslations('title')['ka']}}" required>

        @error('title_ge')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6 flex flex-col items-center ">
        <label for="thumbnail" class="block mb-5 uppercase font-bold text-xs text-white">Current Thumbnail: 
            <img class="mt-3" width="150" src="{{asset('/storage/' . $movie->thumbnail)}}" alt="movie thumbnail">
        </label>
        <input name="thumbnail" id="thumbnail" type="file" class="border border-gray-400 p-2 text-white" required>


        @error('thumbnail')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>


    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blur-500">
        Submit
    </button>
</form>



@endsection