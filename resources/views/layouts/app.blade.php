<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-slate-100">
    <nav class="p-5 bg-cyan-600 text-white flex flex-row justify-between shadow-md">
        <ul class="flex flex-row">
            <li class="px-2">
                <a href={{  route('home') }}>Home</a>
            </li>
            <li class="px-2">
                <a href={{ route('dashboard') }}>Dashboard</a>
            </li>
            <li class="px-2">
                <a href="posts">Posts</a>
            </li>
        </ul>

        <ul class="flex flex-row">
            @if (auth()->user())
                <li class="px-2 font-bold">
                    <a href="">{{ auth()->user()->username }}</a>
                </li>
                <li class="px-2">
                    <form action="{{ route('logout') }}">
                        <button>Logout</button>
                    </form>
                </li>
            @else
                <li class="px-2">
                    <a href={{ route('login') }}>Login</a>
                </li>
                <li class="px-2">
                    <a href={{ route('register') }}>Register</a>
                </li>
            @endif



        </ul>
    </nav>
    <div class="px-16 py-10">
        @yield('content')

    </div>
</body>

</html>
