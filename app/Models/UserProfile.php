<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'date_of_birth',
        'avatar',
        'gender',
        'address',
        'blood_type',
        'insurance_provider',
        'insurance_number',
        'specialization',
        'license_number',
        'years_of_experience',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
