<?php

namespace App\Models\Access\User\Traits\Scope;

/**
 * Class UserScope.
 */
trait UserScope
{
    /**
     * @param  bool  $confirmed
     * @return mixed
     */
    public function scopeConfirmed($query, bool $confirmed = true)
    {
        return $query->where('confirmed', $confirmed);
    }

    /**
     * @param  bool  $status
     * @return mixed
     */
    public function scopeActive($query, bool $status = true)
    {
        return $query->where('status', $status);
    }
}
