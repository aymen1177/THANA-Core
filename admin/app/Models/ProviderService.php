<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProviderService extends Model
{
    protected $fillable = [
        'service_provider_id',
        'service_id',
        'title',
        'description',
        'price',
        'price_type',
        'duration',
        'available',
    ];

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
