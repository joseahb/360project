<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFiles extends Model
{
    use HasFactory;
    protected $fillable = [
'prop_id',
'file',
'name',
'url',
'updated',
    ];
}
