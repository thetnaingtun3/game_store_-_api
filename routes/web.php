<?php



Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => true, // Email Verification Routes...
]);

//Route::resource('/test', 'Dashboard\AboutController@create');
Route::group(['middleware'=>['auth','admin']], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('/about', 'Dashboard\AboutController');
    Route::resource('/team', 'Dashboard\TeamController');
    Route::resource('/category', 'Dashboard\CategoryController');
    Route::resource('/contact', 'Dashboard\ContactController');
});

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


; //Kyan Tay

Route::get('/', 'WebsiteController@index');
