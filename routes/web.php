<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DynamicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('layout.main');
});

 Route::get('/test', function () {
   return view('test100');
});

Route::get('/dynamic', [DynamicController::class, 'index']);
Route::post('api/fetch-states', [DynamicController::class, 'fetchState']);
Route::post('api/fetch-cities', [DynamicController::class, 'fetchCity']);

//country

Route::get('/country',[CountryController::class,'index'])->name('country');
Route::get('/createcountry',[CountryController::class,'create']);
Route::post('/insertcountry',[CountryController::class,'store']);
Route::get('/editcountry/{id}',[CountryController::class,'edit']);
Route::post('/updatecountry/{id}',[CountryController::class,'update']);
Route::get('/deletecountry/{id}',[CountryController::class,'destroy']);

//state

Route::get('/state',[StateController::class,'index'])->name('state');
Route::get('/statedata',[StateController::class,'indextwo']);
Route::get('/createstate',[StateController::class,'create']);
Route::post('/insertstate',[StateController::class,'store']);
Route::get('/editstate/{id}',[StateController::class,'edit']);
Route::post('/updatestate/{id}',[StateController::class,'update']);
Route::get('/deletestate/{id}',[StateController::class,'destroy']);

Route::get('/showcity/{id}',[StateController::class,'show']);

//city

Route::get('/city',[CityController::class,'index'])->name('city');
Route::get('/citydata',[CityController::class,'indextwo']);
Route::get('/createcity',[CityController::class,'create']);
Route::post('/insertcity',[CityController::class,'store']);
Route::get('/editcity/{id}',[CityController::class,'edit']);
Route::post('/updatecity/{id}',[CityController::class,'update']);
Route::get('/deletecity/{id}',[CityController::class,'destroy']);