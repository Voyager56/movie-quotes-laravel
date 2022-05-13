 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html{
            background: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%);
        }
    </style>
</head>

<body class="flex flex-col items-center justify-center h-[100vh]">

    <div class="mt-10">
        @auth
        <div class="w-20 h-20 absolute right-3 top-3 text-white">
                <a href="/admin/movies/list">Movie List</a>
            <a href="en/admin/logout">Log Out</a>

            <form id="logout-form" method="POST" action="en/admin/logout" class="hidden">
                @csrf
            </form>
        </div>

        @else
            <a href="/en/admin/login" class="text-white text-xs font-bold uppercase ml-3">Log In</a>

        @endauth
    </div>


    @yield('content')


</body>
