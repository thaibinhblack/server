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
    Route::group(['middleware' => 'guest:api'], function () {
        Route::get('/province','ProvinceController@index');
        Route::post('/province', 'ProvinceController@store');
        //country
        Route::get('/country','CountryController@index');
        Route::get('/country/{id}','CountryController@show');
        Route::post('/country','CountryController@store');
        Route::put('/country/{id}', 'CountryController@update');
        //store
        Route::get('/store','StoreController@index');
        Route::get('/store/{id}','StoreController@show');
        Route::post('/store','StoreController@store');
        Route::put('/store/{id}','StoreController@update');
        //room
        Route::get('/room','RoomController@index');
        Route::get('/room/{id}','RoomController@show');
        Route::post("/room",'RoomController@store');
        Route::put("/room",'RoomController@update');
        //service 
        Route::get('/service','ServiceController@index');
        Route::post('/service', 'ServiceController@store');
        //booking
        Route::get('/booking','BookingController@index');
        Route::get('/booking/{id}','BookingController@show');
        Route::post('/booking','BookingController@store');
        Route::post('/booking/{id}/update','BookingController@update');
        Route::delete('/booking/{id}','BookingController@destroy');
        //detail service booking
        Route::get('/detail-service/{id}','DetailServiceController@show');
        Route::post('/detail_service_booking','DetailServiceController@store');
        Route::delete('/detail-service/{id}','DetailServiceController@destroy');
        //SMS
        Route::get('/sms','SendSMSController@index');
        Route::post('/sms','SendSMSController@store');
        //question
        Route::get('/question','QuestionController@index');
        Route::post('/question','QuestionController@store');
        //answer
        Route::get('/answer','AnswerController@index');
        Route::post('/answer','AnswerController@store');
        //user question answer 
        Route::get('/user-question/{id}','UserQuestioAnwserController@show');
        Route::post('/user-question','UserQuestioAnwserController@store');
        //rule
        Route::get('/rule','RuleController@index');
        //user
        Route::get('/user','UserController@index');
        Route::get('/user/{id}','UserController@show');
        Route::put('/user/{id}','UserController@update');
        Route::post('/user','UserController@store');
        //stylist
        Route::get('/stylist','StylistController@index');
        Route::post('/stylist','StylistController@store');
        Route::post('/stylist/{id}/update','StylistController@update');
        //email
        Route::post('/email','SendMailController@store');
    });
    //provice
   
});
