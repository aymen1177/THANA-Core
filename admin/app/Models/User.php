<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'password',
        'role',
        'state',
        'municipality',
    ];

    public function serviceProvider()
    {
        return $this->hasOne(ServiceProvider::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
