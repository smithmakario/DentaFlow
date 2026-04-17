<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentQueue extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'appointment_id',
        'clinician_id',
        'patient_id',
        'position',
        'status',
    ];
}
