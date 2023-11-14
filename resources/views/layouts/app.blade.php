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
    <nav class="p-5 bg-cyan-500 text-white flex flex-row justify-between shadow-md">
        <ul class="flex flex-row">
            <li class="px-2">
                <a href="">Home</a>
            </li>
            <li class="px-2">
                <a href="">Dashboard</a>
            </li>
            <li class="px-2">
                <a href="">Posts</a>
            </li>
        </ul>

        <ul class="flex flex-row">
            <li class="px-2 font-bold">
                <a href="">@@gabeFrank</a>
            </li>
            <li class="px-2">
                <a href="">Login</a>
            </li>
            <li class="px-2">
                <a href="">Register</a>
            </li>
            <li class="px-2">
                <a href="">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="px-16 py-10">
        @yield('content')

    </div>
</body>

</html>
