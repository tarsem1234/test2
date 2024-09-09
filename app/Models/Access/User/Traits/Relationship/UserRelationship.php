<?php

namespace App\Models\Access\User\Traits\Relationship;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Access\User\SocialLogin;
use App\Models\System\Session;

/**
 * Class UserRelationship.
 */
trait UserRelationship
{
    /**
     * Many-to-Many relations with Role.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(config('access.role'), config('access.role_user_table'), 'user_id', 'role_id');
    }

    public function providers(): HasMany
    {
        return $this->hasMany(SocialLogin::class);
    }

    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }
}
