<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->get();

        return view('services.index', compact('services'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Service::create([
            'category_id' => $request->category_id,
            'category' => $request->category_id,
            'provider_id' => null,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect('/services');
    }

    public function edit(Service $service)
    {
        $categories = Category::all();

        return view('services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service)
    {
        $service->update([
            'category_id' => $request->category_id,
            'category' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect('/services');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('/services');
    }
}
