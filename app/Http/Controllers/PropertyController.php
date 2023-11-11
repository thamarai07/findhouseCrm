<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Property;




class PropertyController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function store(Request $request){
        $post = new Property;
        $request->validate(["thumbnail" => "image|mimes:jpg,jpeg,png,svg|max:2048"]);
        $request->validate(["banner" => "image|mimes:jpg,jpeg,png,svg|max:2048"]);

        $thumbnail = time().'-'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('images'),$request->$thumbnail);

        $banner = time().'-'.$request->banner->extension();
        $request->banner->move(public_path('images'),$request->$banner);


        $post->business_type = $request->business_type;
        $post->suitable_for = $request->suitable_for;
        $post->property_name = $request->property_name;
        $post->price = $request->price;
        $post->property_address = $request->property_address;
        $post->state = $request->state;
        $post->district= $request->district;

        $post->city = $request->city;
        $post->area = $request->area;
        $post->street = $request->street;
        $post->door_number = $request->door_number;
        $post->pincode = $request->pincode;
        $post->room_details = $request->room_details;
        $post->sqf_property = $request->sqf_property;
        $post->property_age = $request->property_age;
        $post->save();
        return redirect('property')->with('status', 'Property Has Been inserted');
    }
}
