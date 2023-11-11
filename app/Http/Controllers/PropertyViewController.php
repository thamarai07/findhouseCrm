<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyView;


class PropertyViewController extends Controller
{
    public function property_list()
    {
        
        $student = PropertyView::all();
        return view('property_list', compact('student'));
    }
}
