@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-slate-50 rounded-lg shadow-lg p-10">
            <form action="{{ route('register') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="">
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg" value="">
                </div>
            </form>
        </div>
    </div>
@endsection
