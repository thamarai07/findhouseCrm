@extends('layouts.app')

@section('title', 'Property Page')

@section('content')
    <!-- Content specific to the property page goes here -->
    @if (session('status'))
    <div class="bg-green-100 text-green-500 font-bold text-center flex justify-center items-center p-4 text-[24px]">
        {{ session('status') }}
    </div>
@endif
    <div class=" mx-auto p-8  bg-white rounded-lg shadow-lg w-[100%]">
        <h2 class="text-2xl text-center text-gray-700 text-[24px] font-semibold mb-10">Property Listing Form</h2>
        {{-- <form action="{{ url('/properties') }}" method="POST" class="mt-4"> --}}
            
            <form  name="properties" id="properties" method="post" action="{{url('properties')}}" enctype="multipart/form-data" class="border border-gray-500 p-20 rounded">
                @csrf
            <div class="flex gap-10 justify-center items-center">
                <div class="w-[100%]">
                    <label for="thumbnail" class="block mt-4 mb-2 font-semibold">Thumbnail Image</label>
                    <input type="file" id="thumbnail" name="thumbnail" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-[100%]">
                    <label for="banner" class="block mt-4 mb-2 font-semibold">Banner Image</label>
                    <input type="file" id="banner" name="banner" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            <div class="flex w-[100%] gap-10">
            <div class="w-[100%]">
            <label for="business_type" class="block mt-4 mb-2 font-semibold">Type of Business</label>
            <select id="business_type" name="business_type" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                <option value="rent">Rent</option>
                <option value="sale">Sale</option>
                <option value="lease">Lease</option>
            </select>
            </div>

            <div class="w-[100%]">
                <label for="price" class="block mt-4 mb-2 font-semibold">Price</label>
                <input type="text" id="price" name="price" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

                </div>

            <div class="w-[100%]">
            <label for="suitable_for" class="block mt-4 mb-2 font-semibold">Suitable For</label>
            <select id="suitable_for" name="suitable_for" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                <option value="family">Family</option>
                <option value="bachelor">Bachelor</option>
            </select>
            </div>
            </div>
            <label for="property_name" class="block mt-4 mb-2 font-semibold">Property Name</label>
            <input type="text" id="property_name" name="property_name" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

            <label for="property_address" class="block mt-4 mb-2 font-semibold">Property Address</label>
            <textarea id="property_address" name="property_address" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200"></textarea>

            <div class="flex mt-4">
                <div class="w-1/2 pr-2">
                    <label for="state" class="block mb-2 font-semibold">State</label>
                    <input type="text" id="state" name="state" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-1/2 pl-2">
                    <label for="district" class="block mb-2 font-semibold">District</label>
                    <input type="text" id="district" name="district" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            <div class="mt-4">
                <label for="city" class="block mb-2 font-semibold">City</label>
                <input type="text" id="city" name="city" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div class="flex mt-4">
                <div class="w-1/2 pr-2">
                    <label for="area" class="block mb-2 font-semibold">Area</label>
                    <input type="text" id="area" name="area" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-1/2 pl-2">
                    <label for="street" class="block mb-2 font-semibold">Street</label>
                    <input type="text" id="street" name="street" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>
            
           <div class="flex w-[100%] gap-10">
                <div class="w-[100%]">
                    <label for="door_number" class="block mt-4 mb-2 font-semibold">Door Number</label>
                    <input type="text" id="door_number" name="door_number" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div class="w-[100%]">
                    <label for="pincode" class="block mt-4 mb-2 font-semibold">Pincode</label>
                    <input type="text" id="pincode" name="pincode" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            
            <label for="room_details" class="block mt-4 mb-2 font-semibold">Number of Rooms (Bedroom, Kitchen, Bathroom)</label>
            {{-- <input type="text" id="room_details" name="room_details" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200"> --}}
            <select id="room_details" name="room_details" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                <option value="1">1BHK</option>
                <option value="2">2BHK</option>
                <option value="3">3BHK</option>
                <option value="4">4BHK</option>


            </select>

            <label for="sqf_property" class="block mt-4 mb-2 font-semibold">Square Footage of Property</label>
            <input type="text" id="sqf_property" name="sqf_property" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

            <label for="property_age" class="block mt-4 mb-2 font-semibold">How Old is the Property</label>
            <input type="text" id="property_age" name="property_age"  class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">

            <input type="submit" value="Submit" name="submit" class="mt-4 w-full py-2 bg-blue-500 text-white font-semibold rounded cursor-pointer">
        </form>
    </div>
    <!-- Add more content as needed -->
@endsection
