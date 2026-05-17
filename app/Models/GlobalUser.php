<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GlobalUser extends Model
{
    protected $table = 'global_users';

    protected $fillable = [
        'tenant_id',
        'local_user_id',
        'first_name',
        'last_name',
        'username',
        'email',
        'phone_number',
        'address',
        'role',
    ];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
