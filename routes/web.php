<?php



Auth::routes();
//Route::resource('/test', 'Dashboard\AboutController@create');

Route::resource('/about', 'Dashboard\AboutController');
Route::resource('/team', 'Dashboard\TeamController');
Route::resource('/category', 'Dashboard\CategoryController');

//
//Route::post('/projects', 'ProjectController@store');
//
//Route::get('/projects/create', 'ProjectController@create');
//
//Route::get('/projects/{id}/edit', 'ProjectController@edit');
//
//Route::patch('/projects/{id}', 'ProjectController@update');
//
//Route::delete('/projects/{id}', 'ProjectController@destroy');


Route::resource('/contact', 'Dashboard\ContactController'); //Kyan Tay
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/', 'WebsiteController@index');
