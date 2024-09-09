<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessProfile extends Model
{
    use SoftDeletes;

    protected $table = 'business_profiles';

    protected $fillable = ['industry_id', 'company_name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class);
    }

    public function industry()
    {
        return $this->belongsTo(\App\Models\Industry::class, 'industry_id');
    }
}
