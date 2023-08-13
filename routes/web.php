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
Route::get('/', 'back\AdminController@index')->name('admin.index');

// Route::prefix('')->middleware('checkrole')->group(function () {
Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/users', 'back\UserController@index')->name('admin.users');
    Route::get('/profile/{user}', 'back\UserController@edit')->name('admin.profile');
    Route::post('/profileupdate/{user}', 'back\UserController@update')->name('admin.profileupdate');
    Route::get('/users/delete/{user}', 'back\UserController@destroy')->name('admin.user.delete');
    Route::get('/users/status/{user}', 'back\UserController@updatestatus')->name('admin.user.status');
    Route::get('/users/role/{user}', 'back\UserController@updaterole')->name('admin.user.role');

});

    // Route::prefix('admin/categories')->middleware('checkrole')->group(function () {
    Route::prefix('/projects')->middleware('auth')->group(function () {
    Route::get('/', 'back\ProjectController@index')->name('admin.projects');
    Route::get('/create', 'back\ProjectController@create')->name('admin.projects.create');
    Route::post('/store', 'back\ProjectController@store')->name('admin.projects.store');
    Route::get('/edit/{project}', 'back\ProjectController@edit')->name('admin.projects.edit');
    Route::get('/project/{project}', 'back\ProjectController@show')->name('admin.project.show');
    Route::post('/update/{project}', 'back\ProjectController@update')->name('admin.projects.update');
    Route::get('/destroy/{project}', 'back\ProjectController@destroy')->name('admin.projects.destroy');
    Route::get('/status/{project}', 'back\ProjectController@updatestatus')->name('admin.project.status');
});

    // // Route::prefix('admin/categories')->middleware('checkrole')->group(function () {
    //     Route::prefix('/tasks')->middleware('auth')->group(function () {
    //         Route::get('/', 'back\TaskController@index')->name('admin.tasks');
    //         Route::get('/create', 'back\TaskController@create')->name('admin.tasks.create');
    //         Route::post('/store', 'back\TaskController@store')->name('admin.tasks.store');
    //         Route::get('/edit/{category}', 'back\TaskController@edit')->name('admin.tasks.edit');
    //         Route::post('/update/{category}', 'back\TaskController@update')->name('admin.tasks.update');
    //         Route::get('/destroy/{category}', 'back\TaskController@destroy')->name('admin.tasks.destroy');
    //     });
        


// Route::get('/', function () {
//     return view('welcome');
// });

