<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ProviderService;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $user = auth()->user();

        if ($user->role == 'provider') {

            $bookings = Booking::whereHas('providerService.serviceProvider', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->with([
                'user',
                'providerService.serviceProvider',
                'providerService.service'
            ])
            ->get();

        } else {

            $bookings = Booking::where('user_id', $user->id)
            ->with([
                'providerService.serviceProvider',
                'providerService.service'
            ])
            ->get();

        }

        return view('bookings.index', compact('bookings'));
    }


    public function create()
    {
        $providerServices = ProviderService::with([
            'serviceProvider',
            'service'
        ])->where('available', true)->get();

        return view('bookings.create', compact('providerServices'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'provider_service_id' => 'required|exists:provider_services,id',
            'booking_date' => 'nullable|date',
            'notes' => 'nullable',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'provider_service_id' => $request->provider_service_id,
            'booking_date' => $request->booking_date,
            'status' => 'pending',
            'notes' => $request->notes,
        ]);

        return redirect()->route('bookings.index');
    }


    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }


    public function update(Request $request, Booking $booking)
    {
        $booking->update([
            'total_amount' => $request->total_amount,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        return redirect()->route('bookings.index');
    }


    public function accept(Booking $booking)
    {
        $booking->update([
            'status' => 'accepted'
        ]);

        return redirect()->route('bookings.index');
    }


    public function reject(Booking $booking)
    {
        $booking->update([
            'status' => 'rejected'
        ]);

        return redirect()->route('bookings.index');
    }


    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index');
    }


    public function show(Booking $booking)
    {
        //
    }

}
