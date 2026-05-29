<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicBranchProfile extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'contact_email',
        'telephone',
        'specialization',
        'status',
    ];
}
