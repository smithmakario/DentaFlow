<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DentalService extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category',
        'default_cost',
    ];

    protected $casts = [
        'default_cost' => 'decimal:2',
    ];
}
