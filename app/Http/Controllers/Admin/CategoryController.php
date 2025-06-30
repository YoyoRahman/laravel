<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCategory;
use App\Http\Requests\updateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::all();

        return view('Admin.Category.Categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('Admin.Category.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestCategory $request)
    {
        $inputs = $request->all();
        if ($request->file('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('category_image', 'public');
            $inputs['image'] = $imagePath;
        }
        Category::create($inputs);
        return redirect()->route('admin.categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {



        return view('Admin.category.edit', compact('category'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(updateCategoryRequest $request, Category $category)
    {
        $inputs = $request->all();
        if ($request->file('image')) {
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
            $image = $request->file('image');
            $imagePath = $image->store('category_image', 'public');
            $inputs['image'] = $imagePath;
        }
        $category->update($inputs);
        return redirect()->route('admin.categorise');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {


        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();
        return redirect()->back();
    }
}
