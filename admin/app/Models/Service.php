<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'title',
        'category',
        'description',
        'price',
        'status',
    ];

    public function provider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
