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

Route::get('/', 'HomeController@index');

# Los login y logout usados al comienzo de la practica.
/*
Route::get('login', function (){
  return view('auth.login');
});

Route::get('logout', function (){
  return 'Logout Usuario';
});
*/
Route::group(['middleware' => 'auth'], function (){

  Route::get('catalog', 'catalog\CatalogController@getIndex');

  Route::get('catalog/show/{id}', 'catalog\CatalogController@getShow');

  Route::get('catalog/create', 'catalog\CatalogController@getCreate');

  Route::get('catalog/edit/{id}', 'catalog\CatalogController@getEdit');

  Route::post('catalog/create', 'catalog\CatalogController@postCreate');

  Route::put('catalog/edit/{id}', 'catalog\CatalogController@postEdit');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
