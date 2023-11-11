<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "renttostay_states";
    protected $primaryKey = "id";
   
    protected $fillable = [
        "states",
    ];
    use HasFactory;
}
