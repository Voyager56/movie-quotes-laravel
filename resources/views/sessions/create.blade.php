@extends('components.layout')
@section('content')

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border-4 border-gray-300">
            <h1 class="text-center font-bold text-xl mb-10  ">Log In:</h1>

            <form method="POST" action="{{route('login.store')}}">

                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="text" name="email" id="email" class="border border-gray-400 p-2 w-full" value="{{old('email')}}"  required>

                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>

                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blur-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>

@endsection
