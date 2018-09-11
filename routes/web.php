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

Route::get('/', [
    'uses'  => 'ProjectController@index',
    'as'    => '/'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Category/add-category', [
   'uses'   =>'CategoryController@addCategory',
   'as'     => 'add-category'
]);

Route::post('/Category/new-category', [
   'uses'   =>'CategoryController@newCategory',
   'as'     => 'new-category'
]);

Route::get('/Category/manage-category', [
   'uses'   =>'CategoryController@manageCategory',
   'as'     => 'manage-category'
]);

Route::get('/Category/edit-category', [
   'uses'   =>'CategoryController@editCategory',
   'as'     => 'edit-category'
]);

Route::get('/Category/delete-category', [
   'uses'   =>'CategoryController@deleteCategory',
   'as'     => 'delete-category'
]);







Route::get('/test', [
   'uses'   => 'ProjectController@test',
   'as'     => 'test'
]);