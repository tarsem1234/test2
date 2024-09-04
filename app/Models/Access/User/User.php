<?php

namespace App\Models\Access\User;

use App\Models\Access\User\Traits\Attribute\UserAttribute;
use App\Models\Access\User\Traits\Relationship\UserRelationship;
use App\Models\Access\User\Traits\Scope\UserScope;
use App\Models\Access\User\Traits\UserAccess;
use App\Models\Access\User\Traits\UserSendPasswordReset;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User.
 */
class User extends Authenticatable
{
    use Notifiable,
        SoftDeletes,
        UserAccess,
        UserAttribute,
        UserRelationship,
        UserScope,
        UserSendPasswordReset;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'status',
        'confirmation_code', 'confirmed'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The dynamic attributes from mutators that should be returned with the user object.
     *
     * @var array
     */
    protected $appends = ['full_name', 'name', 'rating'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.users_table');
    }

    public function business_profile()
    {
        return $this->hasOne('App\Models\BusinessProfile');
    }

    public function user_profile()
    {
        return $this->hasOne('App\Models\UserProfile');
    }

    public function signature()
    {
        return $this->hasOne('App\Models\Signature');
    }

    public function signatures()
    {
        return $this->hasMany('App\Models\Signature');
    }

    public function rentSignature()
    {
        return $this->hasOne('App\Models\RentSignature');
    }

    public function forums()
    {
        return $this->hasMany('App\Models\Forum');
    }

    public function offer()
    {
        return $this->hasOne('App\Models\Offer');
    }

    public function lerning_points()
    {
        return $this->hasMany('App\Models\Backend\UserLearningPoint');
    }

    public function network()
    {
        return $this->hasOne('App\Models\Network');
    }

    public function signer()
    {
        return $this->hasOne('App\Models\Signer');
    }

    public function messages()
    {
        return $this->hasMany(\App\Models\Message::class, 'to_user_id');
    }

    public function sessions()
    {
        return $this->hasMany(\App\Models\UserLearningSession::class);
    }

    public function ratings()
    {
        return $this->hasMany(\App\Models\ProfileRating::class);
    }

    public function getRatingAttribute()
    {
        return ceil($this->ratings->average('rating'));
    }

    public function subscribeServices()
    {
        return $this->hasMany(\App\Models\SubscribeServices::class);
    }

    public function userConditional()
    {
        return $this->hasMany('App\Models\UsersConditionalData');
    }
}
