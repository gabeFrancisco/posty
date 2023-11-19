<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $posts = Post::paginate(15);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:255'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return redirect()->route('posts');
    }

    public function like(Post $post)
    {
        if($post->likedBy(auth()->user())) {
            return response(null, 409);
        }
        
        $post->likes()->create([
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ]);

        return redirect()->route('posts');
    }
}
