<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@index');
Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
Route::get('profile','UsersController@profile');
Route::get('autocomplete', array('as'=>'rest.autocomplete','uses'=>'RestController@autocomplete'));
Route::post('callbackforminquery','CallbacksController@callbackforminqueryStore');
Route::post('inqForm','InqueriesController@inqStore');
Route::post('checktest','CallbacksController@checkStore');



Route::group(array('prefix' => 'admin'), function()
{
    // Showing the admin for the menu builder and updating the order of menu items
    Route::get('menu/', 'AdminMenuController@getIndex');
    Route::post('menu/', 'AdminMenuController@postIndex');

    Route::post('menu/new', 'AdminMenuController@postNew');
    Route::post('menu/delete', 'AdminMenuController@postDelete');

    Route::get('menu/edit/{id}', 'AdminMenuController@getEdit');
    Route::post('menu/edit/{id}', 'AdminMenuController@postEdit');
    Route::resource('tours', 'AdminToursController');
    Route::resource('tourstheme', 'AdminToursThemeController');
    Route::resource('testimonials', 'AdminTestimonialsController');
    Route::resource('advertisements', 'AdminAdvertisementsController');
});

Route::resource('callbacks', 'CallbacksController');
Route::resource('inqueries', 'InqueriesController');


Route::get('{slug}', array('as'=>'pages.show','uses'=>'PagesController@show'));
Route::resource('sessions', 'SessionsController',['only'=> ['store','create','destroy']]);
Route::resource('users', 'UsersController');
Route::resource('registers','RegistersController');
//Route::get('(:any)', 'PagesController@show');
    //->where('slug', '[\-_A-Za-z/]+');
/*
This shall always be at the end of route file in order to avoid conflicts

*/
//Event::fire('admin::routes');