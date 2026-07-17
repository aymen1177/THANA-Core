<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
        ]);

        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
        ]);

        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories');
    }
}
