<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'branchid',
        'street',
        'town',
        'county',
        'postcode',
        'phone',
        'email',
    ];
}
