<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'service_categories';

    protected $fillable = [
        'domain_id',
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

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'service_category_id');
    }
}
