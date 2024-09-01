<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model {

    public function user() {
        return $this->belongsTo('App\Models\Access\User\User');
    }
    
    public function recommendedBy() {
        return $this->belongsTo('App\Models\Access\User\User', 'from_user_id');
    }

}
