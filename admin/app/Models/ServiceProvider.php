<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceProvider extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'business_name',
        'description',
        'logo',
        'phone',
        'address',
        'latitude',
        'longitude',
        'verification_status',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function providerServices()
    {
        return $this->hasMany(ProviderService::class);
    }
}
