<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;
    protected $fillable =[
        'agents',
        'software',
        'price',
        'rentalfees',
        'lettingsfee',
        'rm_qualifier',
        'available',
        'uploaded',
        'longitude',
        'latitude',
        'easting',
        'northing',
        'web_status',
        'custom_status',
        'comm_rent',
        'premium',
        'service_charge',
        'rateable_value',
        'type',
        'area',
        'furnished',
        'rm_type',
        'let_bond'   ,
        'rm_let_type_id',
        'bedrooms',
        "receptions",
        "bathrooms",
        "userfield1",
        "userfield2",
        "solddate",
        "leaseend",
        "instructed" ,
        "letdate",
        "soldprice",
        "garden",
        "parking",
        "newbuild",
        "groundrent",
        "commission",
        "tenure",
        "description",
        "hip",
        "paragraphs",
        "bullets",
        "userfeatures",
        "adverts",
    ];
}

