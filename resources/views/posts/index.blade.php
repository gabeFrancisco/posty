@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-slate-50 rounded-lg shadow-lg p-10">
            <form action="{{ route('posts') }}" method="post">
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

            @if ($posts->count())
                @foreach ($posts->reverse() as $post)
                    <div class="my-4 border-b rounded ">
                        <a href="" class="text-cyan-700 hover:text-cyan-900">{{ $post->user->username }}</a> <span
                            class="text-sm p-2 text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                        <div class="text-sm p-2 text-gray-700">{{ $post->body }}</div>

                        <div class="flex items-center mb-1">
                            <form action="" method="post" class="mx-1">
                                <button type="submit" class="text-cyan-700 text-sm hover:underline">Like</button>
                            </form>
                            <span class="text-gray-400">|</span>
                            <form action="" method="post" class="mx-1">
                                <button type="submit" class="text-red-500 text-sm hover:underline">Unlike</button>
                            </form>
                        </div>
                    </div>
                @endforeach

                {{ $posts->links('pagination::simple-tailwind') }}
            @else
                <div class="my-5 pt-10 border-t flex w-full items-center justify-center text-gray-500">
                    <p>There is no posts!</p>
                </div>
            @endif
        </div>
    </div>
@endsection
