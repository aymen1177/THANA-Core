<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_ar',
        'name_fr',
        'name_en',
        'description_ar',
        'description_fr',
        'description_en',
        'icon',
        'image',
        'is_active',
        'sort_order',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
