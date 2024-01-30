<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoryPostRequest;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.article.categories.index", [
            'categories' => CategoryPost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $categories = new CategoryPost;
            $categories->name = $request->input('name');
            $categories->slug = $request->input('slug');
            $categories->save();

            return redirect()->back()->with('success', 'category added successfully');
        } catch (\Exception $e) {


            return redirect()->back()->with('error', 'An error occurred while saving the category');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryPostRequest $request, CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryPost $category)
    {
        // Hapus data
        // dd($category); // Tambahkan ini untuk debugging
        $category->delete();

        return redirect()->back()->with('success', 'category deleted succesfully');
    }


}
