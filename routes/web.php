<?php

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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::post('/reservation','CustomerReservationController@reservation');
Route::post('/contact','ContactController@contact');


Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function (){
    Route::get('/dashboard','DashboardController@index');



//Slider Related
    Route::get('/slider','SliderController@slider');
    Route::get('/create','SliderController@Create');
    Route::post('/save/slider','SliderController@saveSlider');
    Route::get('/edit/slider/{id}','SliderController@editSlider');
    Route::post('/update/slider/{id}','SliderController@updateSlider');
    Route::get('/delete/slider/{id}','SliderController@deleteSlider');


    //Category Related
    Route::get('/category','CategoryController@category');
    Route::get('/category/create','CategoryController@Create');
    Route::post('/save/category','CategoryController@saveCategory');
    Route::get('/edit/category/{id}','CategoryController@editCategory');
    Route::post('/update/category/{id}','CategoryController@updateCategory');
    Route::get('/delete/category/{id}','CategoryController@deleteCategory');


    //Item Related
    Route::get('/item','ItemController@item');
    Route::get('/item/create','ItemController@Create');
    Route::post('/save/item','ItemController@saveItem');
    Route::get('/edit/item/{id}','ItemController@editCategory');
    Route::post('/update/item/{id}','ItemController@updateCategory');
    Route::get('/delete/item/{id}','ItemController@deleteCategory');

    //Reservation Related
    Route::get('/reservation','ReservationController@reservation');
    Route::get('/confirm_reservation/','ReservationController@confirmReservation');
    Route::get('/confirm_reservation/','ReservationController@confirmReservation');
    Route::get('/reservation/check/{id}','ReservationController@checkReservation');
    Route::get('/delete/reservation/{id}','ReservationController@deleteReservation');
//    Route::get('/movie/reservation/{id}','ReservationController@movieReservation');


    //Messsage Related
    Route::get('/message','ContactController@message');
    Route::get('/view/message/{id}','ContactController@View');
    Route::get('/delete/message/{id}','ContactController@deleteMessage');
});
