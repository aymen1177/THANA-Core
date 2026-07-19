<?php

namespace App\Http\Controllers;

use App\Models\ProviderService;
use App\Models\ServiceProvider;
use App\Models\Service;
use Illuminate\Http\Request;

class ProviderServiceController extends Controller
{
    public function index()
    {
        $providerServices = ProviderService::with([
            'serviceProvider',
            'service'
        ])->get();

        return view('provider_services.index', compact('providerServices'));
    }


    public function create()
    {
        $providers = ServiceProvider::all();
        $services = Service::all();

        return view('provider_services.create', compact(
            'providers',
            'services'
        ));
    }


    public function store(Request $request)
    {
        $request->validate([
            'service_provider_id' => 'required',
            'service_id' => 'required',
            'price_type' => 'required',
        ]);


        ProviderService::create([
            'service_provider_id' => $request->service_provider_id,
            'service_id' => $request->service_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'price_type' => $request->price_type,
            'duration' => $request->duration,
            'available' => true,
        ]);


        return redirect()->route('provider_services.index');
    }


    public function edit(ProviderService $providerService)
    {
        $providers = ServiceProvider::all();
        $services = Service::all();

        return view('provider_services.edit', compact(
            'providerService',
            'providers',
            'services'
        ));
    }


    public function update(Request $request, ProviderService $providerService)
    {
        $providerService->update([
            'service_provider_id' => $request->service_provider_id,
            'service_id' => $request->service_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'price_type' => $request->price_type,
            'duration' => $request->duration,
        ]);


        return redirect()->route('provider_services.index');
    }


    public function destroy(ProviderService $providerService)
    {
        $providerService->delete();

        return redirect()->route('provider_services.index');
    }
}
