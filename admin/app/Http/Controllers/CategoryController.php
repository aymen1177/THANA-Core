<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Domain;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('domain')->get();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $domains = Domain::all();

        return view('categories.create', compact('domains'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'domain_id' => 'required|exists:domains,id',
            'name_ar' => 'required',
            'name_fr' => 'required',
            'name_en' => 'required',
        ]);

        Category::create([
            'domain_id' => $request->domain_id,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
        ]);

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        $domains = Domain::all();

        return view('categories.edit', compact('category', 'domains'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'domain_id' => 'required|exists:domains,id',
            'name_ar' => 'required',
            'name_fr' => 'required',
            'name_en' => 'required',
        ]);

        $category->update([
            'domain_id' => $request->domain_id,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'name_en' => $request->name_en,
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}
