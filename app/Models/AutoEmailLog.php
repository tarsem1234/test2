<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Access\User\User;

class AutoEmailLog extends Model {

    use SoftDeletes;

    protected $table = "auto_email_logs";

    public function user() {
        return $this->belongsTo(User::class, 'from_user_id');
    }

}
