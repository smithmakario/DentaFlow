<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'clinician_id',
        'patient_id',
        'title',
        'notes',
        'status',
        'scheduled_at',
    ];

    public function clinician()
    {
        return $this->belongsTo(User::class, 'clinician_id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
