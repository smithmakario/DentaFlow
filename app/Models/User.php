<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'role',
        'phone_number',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function userProfile(): HasOne
    {
        return $this->hasOne(UserProfile::class);
    }

    public function isSuperAdmin(): bool
    {
        return $this->role === 'super_admin';
    }

    public function isClinicAdmin(): bool
    {
        return $this->role === 'clinic_admin';
    }

    public function isDoctor(): bool
    {
        return $this->role === 'doctor';
    }

    public function isReceptionist(): bool
    {
        return $this->role === 'receptionist';
    }

    public function isNurse(): bool
    {
        return $this->role === 'nurse';
    }

    public function isPatient(): bool
    {
        return $this->role === 'patient';
    }

    public function isAccountant(): bool
    {
        return $this->role === 'accountant';
    }

    public function isLabTech(): bool
    {
        return $this->role === 'lab_tech';
    }
}
