@extends('layouts.app')

@section('title', 'Suitable For')

@section('content')


<div>
    @if (session('status'))
    <div class="bg-green-100 text-green-500 font-bold text-center flex justify-center items-center p-4 text-[24px]">
        {{ session('status') }}
    </div>
@endif
    <div class=" mx-auto p-8  bg-white rounded-lg shadow-lg w-[100%]">
        <h2 class="text-2xl text-center text-gray-700 text-[24px] font-semibold mb-10">Suitable For Form</h2>
            
            <form  name="states" id="states" method="post" action="{{url('states')}}" enctype="multipart/form-data" class="border border-gray-500 p-20 rounded">
                @csrf
            <div class="">
                <div class="w-[100%]">
                    <label for="states" class="block mt-4 mb-2 font-semibold"> State Name </label>
                    <input type="text" id="states" name="states" class="w-full py-2 px-3 border rounded bg-white text-gray-700 text-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <input type="submit" value="Submit" name="submit" class="mt-4 w-full py-2 bg-blue-500 text-white font-semibold rounded cursor-pointer">
            </div>
        </form>

</div>

@endsection