<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'provider_service_id',
        'booking_date',
        'status',
        'total_amount',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function providerService()
    {
        return $this->belongsTo(ProviderService::class);
    }
}
