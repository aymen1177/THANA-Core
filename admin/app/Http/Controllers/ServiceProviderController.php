<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index()
    {
        $providers = ServiceProvider::all();

        return view('service_providers.index', compact('providers'));
    }


    public function create()
    {
        return view('service_providers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'business_name' => 'required|max:150',
            'phone' => 'nullable|max:20',
            'description' => 'nullable',
            'address' => 'nullable',
        ]);


        ServiceProvider::create([
            'user_id' => auth()->id(),
            'business_name' => $request->business_name,
            'description' => $request->description,
            'phone' => $request->phone,
            'address' => $request->address,
            'verification_status' => 'pending',
            'status' => 'active',
        ]);


        return redirect()->route('service_providers.index');
    }


    public function edit(ServiceProvider $serviceProvider)
    {
        return view('service_providers.edit', compact('serviceProvider'));
    }


    public function update(Request $request, ServiceProvider $serviceProvider)
    {
        $request->validate([
            'business_name' => 'required|max:150',
            'phone' => 'nullable|max:20',
            'description' => 'nullable',
            'address' => 'nullable',
        ]);


        $serviceProvider->update([
            'business_name' => $request->business_name,
            'description' => $request->description,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);


        return redirect()->route('service_providers.index');
    }


    public function destroy(ServiceProvider $serviceProvider)
    {
        $serviceProvider->delete();

        return redirect()->route('service_providers.index');
    }
}
