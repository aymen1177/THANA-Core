<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Domain;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceProvider;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();


        if ($user->role == 'customer') {

            return view('dashboard_customer', [
                'bookings' => Booking::where('user_id', $user->id)->count(),
            ]);

        }


        if ($user->role == 'provider') {

            return view('dashboard_provider', [
                'bookings' => Booking::whereHas('providerService.serviceProvider', function ($query) use ($user) {
                    $query->where('user_id', $user->id);
                })->count(),
            ]);

        }


        return view('dashboard', [
            'users' => User::count(),
            'domains' => Domain::count(),
            'categories' => Category::count(),
            'services' => Service::count(),
            'providers' => ServiceProvider::count(),
            'bookings' => Booking::count(),
        ]);
    }
}
