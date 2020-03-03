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

/*
*/

Route::post('brand/Search','BrandController@searchBrand')->name('brand.Search');


// Route::get('/add', function () {
//     return view('admin/add_brand');
// });



Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();
Route::get('/dashboard', 'HomeController@index');
Route::get('/Profile', 'PageController@profile');

Route::get('/about', 'PageController@about');
Route::get('/', 'PageController@index');
Route::get('/stock', 'PageController@stock');
Route::get('/new collection', 'PageController@newColl');
Route::get('/service', 'PageController@service');
Route::get('/recondition', 'PageController@recondition');
Route::get('/contact us', 'PageController@contact');
Route::get('/create', 'CarController@add_car');
Route::get('/car', 'CarController@index');
Route::post('/car/store', 'CarController@store')->name('car.store');
Route::get('/car/{id}/edit', 'CarController@edit')->name('car.edit');
Route::post('/car/{id}/update', 'CarController@update')->name('car.update');
Route::get('/car/{id}/destroy', 'CarController@destroy')->name('car.delete');

Route::get('/create brand', 'BrandController@add_brand');
Route::get('/brand', 'BrandController@index');
Route::post('/brand/store', 'BrandController@store')->name('brand.store');
Route::get('/brand/{id}/edit', 'BrandController@edit')->name('brand.edit');
Route::post('/brand/{id}/update', 'BrandController@update')->name('brand.update');
Route::get('/brand/{id}/destroy', 'BrandController@destroy')->name('brand.delete');

Route::get('/create model', 'ModelController@add_model');
Route::get('/model', 'ModelController@index');
Route::post('/model/store', 'ModelController@store')->name('model.store');
Route::get('/model/{id}/edit', 'ModelController@edit')->name('model.edit');
Route::post('/model/{id}/update', 'ModelController@update')->name('model.update');
Route::get('/model/{id}/destroy', 'ModelController@destroy')->name('model.delete');

Route::get('/create color', 'ColorController@add_color');
Route::get('/color', 'ColorController@index');
Route::post('/color/store', 'ColorController@store')->name('color.store');
Route::get('/color/{id}/edit', 'ColorController@edit')->name('color.edit');
Route::post('/color/{id}/update', 'ColorController@update')->name('color.update');
Route::get('/color/{id}/destroy', 'ColorController@destroy')->name('color.delete');

