<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "renttostay_districts";
    protected $primaryKey = "id";
   
    protected $fillable = [
        "district",
    ];
    use HasFactory;
}
