<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Signer extends Model
{
    use Notifiable, SoftDeletes;

    protected $table = 'signers';

    public function signer_user()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'from_user_id');
    }

    public function invited_users()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'invited_user_id');
    }
}
