<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\ProviderServiceController;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    Route::resource('domains', DomainController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('services', ServiceController::class);

    Route::resource('service_providers', ServiceProviderController::class);

    Route::resource('provider_services', ProviderServiceController::class);

    Route::resource('bookings', BookingController::class);


    Route::patch('/bookings/{booking}/accept', [BookingController::class, 'accept'])
        ->name('bookings.accept');


    Route::patch('/bookings/{booking}/reject', [BookingController::class, 'reject'])
        ->name('bookings.reject');


    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');


    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');


    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


require __DIR__.'/auth.php';
