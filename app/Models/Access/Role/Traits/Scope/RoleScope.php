<?php

namespace App\Models\Access\Role\Traits\Scope;

/**
 * Class RoleScope.
 */
trait RoleScope
{
    /**
     * @param  string  $direction
     * @return mixed
     */
    public function scopeSort($query, string $direction = 'asc')
    {
        return $query->orderBy('sort', $direction);
    }
}
