<?php

namespace App\Models;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AutoEmailLog extends Model
{
    use SoftDeletes;

    protected $table = 'auto_email_logs';

    public function user()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }
}
