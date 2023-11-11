<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = "renttostay_propertys_details";
    protected $primaryKey = "id";
   
    protected $fillable = [
        "thumbnail",
        "banner",
        "business_type",
        "suitable_for",
        "property_name",
        "price",
        "property_address",
        "state",
        "district",
        "city",
        "area",
        "street",
        "door_number",
        "pincode",
        "room_details",
        "sqf_property",
        "property_age",
        "status",
        "deleted_status",
    ];

    use HasFactory;
}
