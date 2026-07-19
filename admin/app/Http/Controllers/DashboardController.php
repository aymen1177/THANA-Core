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
