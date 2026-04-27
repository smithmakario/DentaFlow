<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = [
        'appointment_id',
        'name',
        'description',
        'tooth_code',
        'base_cost',
        'category',
    ];

    protected $casts = [
        'base_cost' => 'decimal:2',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
