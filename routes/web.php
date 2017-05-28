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


Route::post('register2','UserController@store');
Route::post('logout','UserController@logout');



Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('index', 'HomeController@index');

Route::any('config', 'ConfigController')->name('config');
Route::post('update_profile', 'ConfigController@update_profile')->name('config');

Route::get('profile/{id}', 'ProfileController')->name('profile');


Route::get('artist/{id}', 'ArtistController')->name('artist');
Route::post('add_to_fav', 'ArtistController@add_to_fav')->name('artist');


Route::any('group/{id}', 'GroupController')->name('group');
Route::any('add_Favorite', 'GroupController@add_Favorite')->name('group');


Route::get('list', 'ListController@getDramas')->name('list');
Route::post('update_drama_status', 'ListController@update_drama_status');
Route::get('delete_from_list/{idDrama}', 'ListController@delete_from_list');
Route::get('/recharge_list', 'ListController@recharge_list');
Route::get('/add_list/{idDrama}', 'ListController@add_list');

Route::get('drama/{id}', 'DramaController')->name('drama');
Route::post('add_to_list', 'DramaController@add_to_list')->name('drama');
Route::post('add_to_fav_drama', 'DramaController@add_to_fav_drama')->name('drama');

Route::post('search', 'SearchController')->name('search');
Route::get('search/{drama?}{artist?}{user?}', 'SearchController')->name('search');
//Route::post('add_to_list', 'DramaController@add_to_list')->name('drama');


Route::get('resenia/{idResenia}', 'ReseniaContoller')->name('resenia');
Route::post('/create_resenia', 'ReseniaContoller@create_resenia')->name('resenia');
Route::get('/update_resenia/{idResenia}/{resenaText}', 'ReseniaContoller@update_resenia');
Route::get('/delete_resenia/{idResenia}', 'ReseniaContoller@delete_resenia');




//Route::get('profile', 'ProfileController')->name('profile');;



Route::get('/home', function () {
    return view('start');
})->name('home');


Route::get('/config-account', function () {
    return view('config-account');
})->name('config-account');






/*Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/artist', function () {
    return view('artist');
})->name('artist');
Route::get('/group', function () {
    return view('group');
});
Route::get('/list', function () {
    return view('list');
})->name('list');

Route::get('/search', function () {
    return view('search');
});


*/








