<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuitableFor extends Model
{
    protected $table = "renttostay_suitable_fors";
    protected $primaryKey = "id";
   
    protected $fillable = [
        "suitable_for",
    ];


    use HasFactory;
}
