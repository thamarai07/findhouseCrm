<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Http\Resources\Property as PropertyResource;


class Apicontroller extends Controller
{
    public function Property(Request $request,$id){
        $property = Property::find($id);
        return new PropertyResource($property);
    }
  
}
