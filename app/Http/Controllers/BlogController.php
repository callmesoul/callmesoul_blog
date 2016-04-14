<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {

//        $posts = Post::where('published_at', '<=', Carbon::now())
//            ->orderBy('published_at', 'desc')
//            ->paginate(config('blog.posts_per_page'));

        return view('blog.index');
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }
    public function showAll()
    {
        return Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
    }
}