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

Route::get('/', 'PagesController@home');

Route::get('/contact','PagesController@contact');
/*Following is an alternate way for routing*/
Route::get('/about',function (){
    return view('about');
});

Route::get('/projects','ProjectsController@index');
Route::get('/projects/create','ProjectsController@create');
Route::post('/projects','ProjectsController@store');
Route::get('/projects/{project}/edit','ProjectsController@edit');
Route::patch('/projects/{project}', 'ProjectsController@update');
Route::get('projects/{project}','ProjectsController@show');
Route::delete('/projects/{project}','ProjectsController@delete');

Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');