<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicProfile extends Model
{
    protected $fillable = [
        'clinic_name',
        'description',
        'logo',
        'address',
        'contact_email',
        'telephone',
        'specialization',
        'branch_no',
        'sub_type',
        'status',
    ];
}
