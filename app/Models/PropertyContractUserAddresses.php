<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyContractUserAddresses extends Model
{
    use SoftDeletes;

    protected $table = 'property_contract_user_addresses';
}
