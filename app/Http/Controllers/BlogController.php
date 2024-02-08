<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = CategoryPost::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('landing_pages.blogs', [
            "title" => "All Posts" .$title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('landing_pages.blog', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}