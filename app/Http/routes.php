<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//      return "hi there";
// });

// Route::get('/about', function(){
// 	return 'About Page';

// });

Route::get('/','pagesController@home');
Route::get('about','pagesController@about');
Route::get('contact','pagesController@contact');

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('gallery','GalleryController@index');
Route::get('gallery/{id}','GalleryController@show');

Route::get('admin', 'adminController@index');
Route::get('admin/{id}', 'adminController@edit');
Route::put('admin/{id}/file', 'adminController@edited')->name('edited');
//fix up this stuff - the routing for your form is off.
// Route::get('edit/{id}', 'adminController@edit');
// // Route::put('edit/file', 'adminController@edited')->name('edited');

Route::get('upload', 'adminController@formUpload')->name('formupload');
Route::post('upload/file', 'adminController@uploaded')->name('uploaded');





// Route::get('edit/{id}','UploadImageController@edit');