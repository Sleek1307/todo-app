<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(3);
        $all_categories = Category::orderBy('created_at', 'desc')->get();

        return view('categories.index', compact('categories', 'all_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(3);

        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategory $request)
    {
        $category = Category::create($request->all());

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(3);

        return view('categories.show', compact('category', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(3);

        return view('categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategory $request, category $category)
    {
        $category->update($request->all());

        return redirect()->route("categories.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('homes');
    }
}
