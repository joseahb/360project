<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAddresses extends Model
{
    use HasFactory;
    protected $fillable = [
        'pro_id',
        'name',
        'street',
        'locality',
        'town',
        'county',
        'postcode',
        'custom_location',
        'display',
    ];
}
