@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-slate-50 rounded-lg shadow-lg p-10">
            <form action="{{ route('posts')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="resize-none bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-400 @enderror"
                        placeholder="Post something"></textarea>

                    @error('body')
                        <div class="text-red-400 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="my-5">
                        <button type="submit" class="bg-cyan-600 text-white px-5 py-2 rounded font-medium">Post!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
