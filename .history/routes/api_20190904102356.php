<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//province
Route::group(['prefix' => '/v1'], function () {
    //provice
    Route::get('/province','ProvinceController@index')->middleware('cors');
    Route::post('/province', 'ProvinceController@store')->middleware('cors');
    //country
    Route::get('/country','CountryController@index')->middleware('cors');
    Route::get('/country/{id}','CountryController@show')->middleware('cors');
    Route::post('/country','CountryController@store')->middleware('cors');
    Route::put('/country/{id}', 'CountryController@update')->middleware('cors');
    //store
    Route::get('/store','StoreController@index')->middleware('cors');
    Route::get('/store/{id}','StoreController@show')->middleware('cors');
    Route::post('/store','StoreController@store')->middleware('cors');
    Route::put('/store/{id}','StoreController@update')->middleware('cors');
    //room
    Route::get('/room','RoomController@index')->middleware('cors');
    Route::get('/room/{id}','RoomController@show')->middleware('cors');
    Route::post("/room",'RoomController@store')->middleware('cors');
    Route::put("/room",'RoomController@update')->middleware('cors');
    //service 
    Route::get('/service','ServiceController@index')->middleware('cors');
    Route::post('/service', 'ServiceController@store')->middleware('cors');
    //booking
    Route::get('/booking','BookingController@index')->middleware('cors');
    Route::get('/booking/{id}','BookingController@show')->middleware('cors');
    Route::post('/booking','BookingController@store')->middleware('cors');
    Route::put('/booking/{id}','BookingController@update')->middleware('cors');
    Route::delete('/booking/{id}','BookingController@destroy')->middleware('cors');
    //detail service booking
    Route::get('/detail-service/{id}','DetailServiceController@show')->middleware('cors');
    Route::post('/detail_service_booking','DetailServiceController@store')->middleware('cors');
    Route::delete('/detail-service/{id}','DetailServiceController@destroy')->middleware('cors');
    //SMS
    Route::get('/sms','SendSMSController@index')->middleware('cors');
    Route::post('/sms','SendSMSController@store')->middleware('cors');
    //question
    Route::get('/question','QuestionController@index')->middleware('cors');
    Route::post('/question','QuestionController@store')->middleware('cors');
    //answer
    Route::get('/answer','AnswerController@index')->middleware('cors');
    Route::post('/answer','AnswerController@store')->middleware('cors');
    //user question answer 
    Route::get('/user-question/{id}','UserQuestioAnwserController@show')->middleware('cors');
    Route::post('/user-question','UserQuestioAnwserController@store')->middleware('cors');
    //rule
    Route::get('/rule','RuleController@index')->middleware('cors');
    //user
    Route::get('/user','UserController@index')->middleware('cors');
    Route::get('/user/{id}','UserController@show')->middleware('cors');
    Route::put('/user/{id}','UserController@update')->middleware('cors');
    Route::post('/user','UserController@store')->middleware('cors');
    //stylist
    Route::get('/stylist','StylistController@show')->middleware('cors');
    Route::post('/stylist','StylistController@store')->middleware('cors');
});
