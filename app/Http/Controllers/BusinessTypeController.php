<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessType;


class BusinessTypeController extends Controller
{
    public function store(Request $request){
        $post = new BusinessType;
        $post->business_types = $request->business_types;
        $post->save();
        return redirect('business_type')->with('status', 'Business Type Has Been inserted');
    }
}
