<?php

use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/','homecontroller@index');

Route::get('/redirects','homecontroller@redirects');

Route::get('/users','admincontroller@user');
Route::get('/deleteuser/{id}','admincontroller@deleteuser');
Route::get('/foodmenu','admincontroller@foodmenu');
Route::post('/uploadfood','admincontroller@upload');
Route::get('/deletemenu/{id}','admincontroller@deletemenu');
Route::get('/updatemenu/{id}','admincontroller@updatemenu');
Route::post('/update/{id}','admincontroller@update')->name('update');


Route::post('/reservation','admincontroller@reservation')->name('reservation');
Route::get('/viewreservation','admincontroller@viewreservation');


Route::get('/viewchef','admincontroller@viewchef');
Route::post('/uploadchef','admincontroller@uploadchef');
Route::get('/updatechef/{id}','admincontroller@updatechef');
Route::post('/updatefoodchef/{id}','admincontroller@updatefoodchef');
Route::get('/deletechef/{id}','admincontroller@deletechef');


Route::post('/addcart/{id}','homecontroller@addcart');
Route::get('/showcart/{id}','homecontroller@showcart');

Route::get('/remove/{id}','homecontroller@remove');
Route::post('/orderconfirm','homecontroller@orderconfirm');

Route::get('/orders','admincontroller@orders');
Route::get('/search','admincontroller@search');
