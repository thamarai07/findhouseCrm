<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "renttostay_citys";
    protected $primaryKey = "id";
   
    protected $fillable = [
        "states",
    ];
    use HasFactory;
}
