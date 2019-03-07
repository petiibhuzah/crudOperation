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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/roles/create/page', 'RolesController@getCreateRolePage')->name('create.role');
Route::get('/roles/view/page/{id}', 'RolesController@viewRolePage')->name('view.role');
Route::get('/roles/edit/page/{id}', 'RolesController@editRolePage')->name('edit.role');
Route::get('/roles/delete/{id}', 'RolesController@deleteRolePage')->name('delete.role');
Route::post('/store/role', 'RolesController@storeRole')->name('store.role');
Route::post('/update/role/{id}', 'RolesController@updateRole')->name('update.role');