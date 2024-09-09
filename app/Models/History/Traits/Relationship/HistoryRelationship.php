<?php

namespace App\Models\History\Traits\Relationship;

use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Access\User\User;
use App\Models\History\HistoryType;

/**
 * Class HistoryRelationship.
 */
trait HistoryRelationship
{
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function type(): HasOne
    {
        return $this->hasOne(HistoryType::class, 'id', 'type_id');
    }
}
