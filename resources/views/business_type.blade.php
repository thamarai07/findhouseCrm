@extends('layouts.app')

@section('title', 'Business Type')

@section('content')

<div>
    @if (session('status'))
    <div class="bg-green-100 text-green-500 font-bold text-center flex justify-center items-center p-4 text-[24px]">
        {{ session('status') }}
    </div>
@endif
    <div class=" mx-auto p-8  bg-white rounded-lg shadow-lg w-[100%]">
        <h2 class="text-2xl text-center text-gray-700 text-[24px] font-semibold mb-10">Business Type Form</h2>
        {{-- <form action="{{ url('/properties') }}" method="POST" class="mt-4"> --}}
            
            <form  name="business_type" id="business_type" method="post" action="{{url('business_types')}}" enctype="multipart/form-data" class="border border-gray-500 p-20 rounded">
                @csrf
            <div class="">
                <div class="w-[100%]">
                    <label for="business_types" class="block mt-4 mb-2 font-semibold">Business Type</label>
                    <input type="text" id="business_types" name="business_types" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <input type="submit" value="Submit" name="submit" class="mt-4 w-full py-2 bg-blue-500 text-white font-semibold rounded cursor-pointer">
            </div>
        </form>

</div>

@endsection