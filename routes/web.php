<?php
use App\Products;

Route::get('/', 'ProductController@index');



Route::get('/welcomeadmin','AdminController@welcomeadmin');


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/insert','ProductController@formulaire');

Route::post('/insert','ProductController@create');

Route::get('delete/{id}','ProductController@destroy');

Route::get('/edit/{id}','ProductController@editData')->name('edit');

Route::post('/update','ProductController@updateData')->name('update');

Route::get('/shop/{id}','ProductController@viewData')->name('shop');

Route::get('/view/{id}','ProductController@viewProduct');