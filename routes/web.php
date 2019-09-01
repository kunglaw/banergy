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
    return view('landing');
});

Route::get("/blank", function(){
    $data["title"] = "Blank";
    return view("blank",$data);
});

Route::get("/test", function(){
   
    return view("blank");
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');