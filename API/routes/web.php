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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function() {

  Route::get("dipartimento",                "opisController@getDepartments"); 
  Route::get("cds",                         "opisController@getCds"); 
  Route::get("cds/{department}",            "opisController@getCds"); 
  Route::get("insegnamento/{cds}",          "opisController@getTeachings"); 
  Route::get("schedeInsegnamento",          "opisController@getSchedeAboutTeaching"); 
  Route::get("schede",                      "opisController@getResults");
  Route::get("materia/{id}",                "opisController@getSubject");

});
