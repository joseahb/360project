<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyStreetView extends Model
{
    use HasFactory;

    protected $fillable = [
        'prop_id',
        'pov_latitude',
        'pov_longitude',
        'pov_pitch',
        'pov_heading',
        'pov_zoom',
    ];
}
