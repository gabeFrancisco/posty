@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-slate-50 rounded-lg shadow-lg p-10">
            @if (session('status'))
                <div class="m-2 text-red-400">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('username') border-red-400 @enderror"
                        value={{ old('username') }}>
                </div>
                @error('username')
                    <div class="text-red-400 m-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-400 @enderror"
                        value={{ old('password') }}>
                </div>
                @error('password')
                    <div class="text-red-400 m-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="bg-cyan-600 text-white px-4 py-2 rounded font-medium w-full hover:bg-cyan-700">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
