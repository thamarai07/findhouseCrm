<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{

    protected $table = "renttostay_business_types";
    protected $primaryKey = "id";
   
    protected $fillable = [
        "business_types",
    ];

    use HasFactory;
}
