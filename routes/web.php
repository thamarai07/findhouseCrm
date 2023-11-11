<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BusinessTypeController;
use App\Http\Controllers\SuitableForController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PropertyViewController;





// DistrictController



// SuitableForController



// 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/property', function () {
    return view('property');
})->name('property');

Route::get('/property_lists', function () {
    return view('property_list');
})->name('property_lists');






Route::get('/business_type', function () {
    return view('business_type');
})->name('business_type');

Route::get('/suitable_for',function(){
    return view("suitable_for");
})->name("suitable_for");

Route::get('/state',function(){
    return view("state");
})->name("state");

Route::get('/district',function(){
    return view("district");
})->name("district");

Route::get('/city',function(){
    return view("city");
})->name("city");
// city


Route::post("/properties",[PropertyController::class,"store"]);
Route::get('/property_list', [PropertyViewController::class, 'property_list']);


Route::post("/business_types",[BusinessTypeController::class,"store"]);
Route::post("/suitable_fors",[SuitableForController::class,"store"]);
Route::post("/states",[StateController::class,"store"]);
Route::post("/districts",[DistrictController::class,"store"]);
Route::post("/citys",[CityController::class,"store"]);



// StateController
