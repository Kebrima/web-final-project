<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);
Route::get('/logout','Auth\LoginController@logout')->name('get-logout');

Route::group([
    'middleware' => 'auth',
    'namespace' => 'Admin',
    'prefix'=>'admin',
], function (){
    Route::group(['middleware'=>'is_admin'], function (){
        Route::get('/orders', 'OrderController@index')->name('orders');
    });

    Route::resource('categories','CategoryController');
});

Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');


Route::post('basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
Route::group([
    'middleware'=>'basket_not_empty',
    'prefix'=>'basket',
],function (){
    Route::get('/', 'BasketController@basket')->name('basket');
    Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
    Route::post('/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
    Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');
});



Route::get('/contact',function (){ return view('auth.support.contact');})->name('contact');
Route::post('/contact/submit', 'ContactController@submit');
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::get('/contact/all/{id}', 'ContactController@showMessage')->name('contact-data-message');
Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('contact-update');
Route::post('/contact/all/{id}/update', 'ContactController@updateMessageSubmit')->name('contact-update-submit');
Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-delete');

Route::get('/about', function(){ return view('about');})->name('about');



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');






Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product?}', 'MainController@product')->name('product');



