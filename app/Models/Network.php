<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Network extends Model {

    use SoftDeletes;

    protected $table = "networks";

    public function request_from_user() {
        return $this->belongsTo('App\Models\Access\User\User', 'from_user_id');
    }

    public function request_to_user() {
        return $this->belongsTo('App\Models\Access\User\User', 'to_user_id');
    }

    public function associate() {
        return $this->belongsTo('App\Models\Access\User\User', $this->from_user_id === Auth::id() ? 'to_user_id' : 'from_user_id');
    }
  
}
