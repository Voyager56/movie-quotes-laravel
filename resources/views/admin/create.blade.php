@extends('components.admin-layout')
@section('content')

<form action="movie" method="POST" enctype="multipart/form-data" class="flex flex-col items-center">
    @csrf
    <h1 class="text-white text-2xl my-10">Add A New Movie</h1>
    <div class="mb-6 flex flex-col items-center ">
        <label for="title" class="block mb-2 uppercase font-bold text-xs text-white">Title</label>
        <input type="text" name="title" id="title" class="border border-gray-400 p-2 text-black" value="{{old('title')}}" required>

        @error('title')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-6 flex flex-col items-center ">
        <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-white">Thumbnail</label>
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
