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
Route::get('/projectEdit', function () {
    return view('editPage.projectEdit');
});


// Route::get('/viewArticles', function () {
//     return view('viewArticles');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('article','articleController');
Route::resource('project','projectController');
Route::resource('message','messageController');
Route::resource('details','detailsController');