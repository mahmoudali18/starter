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


Route::get('/test1', function () {

    return 'welcome';
});


//route parameter

Route::get('/test2/{id}', function ($id) {

    return $id;
});


Route::get('/test3/{id?}', function () {

    return 'welcome';
});

//route name
Route::get('/test3/{id?}', function () {

    return 'welcome';
})->name('a');

/*
Route::namespace('Front')->group(function () {

    //all routes only access controller or folder name Front

    Route::get('users','UserController@showAdminName');

    // Route::get('users','UserController@showAdminName');
    //Route::get('users','UserController@showAdminName');
    //Route::get('users','UserController@showAdminName');


});

Route::group(['prefix' => 'users'],function(){

    //all route
    Route::get('/',function(){
        return 'work';
    });
    Route::get('show','UserController@showAdminName');
    Route::delete('delete','UserController@showAdminName');
    Route::get('edit','UserController@showAdminName');

});

*/
//Route::get('second','Admin\SecondController@showString');

Route::group(['namespace' => 'Admin'],function(){
    Route::get('second','SecondController@showString');
});


Route::resource('news','NewsController');

Route::get('index','Front\UserController@getIndex');

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
