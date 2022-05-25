@extends('components.admin-layout')
@section('content')

<head>
    <title>Add Movie Quotes</title>
</head>
<body>
    <div class="px-4 sm:px-6 lg:px-8 mt-10">
        <div class="sm:flex sm:items-center">
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{route('movies.create')}}" type="button" class="absolute right-3 top-3 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add Movie</a>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr class="bg-black">
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6">Name/სახელი</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Thumbnail/ფოტო</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Quotes/ციტატები</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Delete</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($movies as $movie)
                                <tr class="bg-gray-200">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{$movie->getTranslations('title')['en']}} / 
                                        {{$movie->getTranslations('title')['ka']}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <img width="150" src="{{asset('/storage/' . $movie->thumbnail)}}" alt="movie thumbnail">
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-xl text-gray-500">
                                        {{$movie->quotes->count()}}
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="{{route('movies.edit', $movie->slug)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <form action="{{route('movies.delete', $movie->slug)}}" method="POST" class="text-red-600 hover:text-indigo-900">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="my-5">
                            {{$movies->links()}}
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
@endsection
