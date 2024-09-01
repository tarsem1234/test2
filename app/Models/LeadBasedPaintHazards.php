<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadBasedPaintHazards extends Model
{

    use SoftDeletes;
    protected $table = "lead_based_paint_hazards";

}