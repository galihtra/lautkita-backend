<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\CategoryPost;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.article.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }



    public function create()
    {
        return view('pages.article.posts.create', [
            'categories' => CategoryPost::all()
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            // Simpan gambar ke direktori yang benar
            $validatedData['image'] = $request->file('image')->store('public/post-images');

            // Dapatkan path gambar yang disimpan di storage
            $publicImagePath = str_replace('public/', '', $validatedData['image']);
            $url = Storage::url($publicImagePath);
            $validatedData['image'] = $url;
        }

        $validatedData['user_id'] = auth()->user()->id;
        // ambil hanya 200 kata untuk excerpt
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // insert data
        Post::create($validatedData);

        return redirect('article')->with(
            'success',
            'New post has been added!'
        );
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('pages.article.posts.show', [
            'post' => $post
        ]);
    }


    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.article.posts.edit', [
            'post' => $post,
            'categories' => CategoryPost::all()
        ]);
    }

    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($post->image) {
                Storage::delete(str_replace('storage/', 'public/', $post->image));
            }
            $validatedData['image'] = $request->file('image')->store('public/post-images');
            // Dapatkan path gambar yang disimpan di storage
            $publicImagePath = str_replace('public/', '', $validatedData['image']);
            $url = Storage::url($publicImagePath);
            $validatedData['image'] = $url;
        }

        $validatedData['user_id'] = auth()->user()->id;
        // ambil hanya 200 kata untuk excerpt
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // update data
        $post->update($validatedData);

        return redirect('article')->with(
            'success',
            'Post has been updated!'
        );
    }


    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            // Handle jika post tidak ditemukan
            return redirect()->back()->with('error', 'Post not found.');
        }

        if ($post->image) {
            Storage::delete($post->image);
        }

        // Hapus data
        $post->delete();

        return redirect('article')->with(
            'success',
            'Post has been deleted!'
        );
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
