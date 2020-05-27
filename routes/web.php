<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group([
    'middleware' => 'auth',
    'namespace' => 'Admin',
    'prefix' => 'admin',
] , function (){
    Route::group(['middleware' => 'is_admin'] , function (){
        Route::get('/orders', 'OrderController@index')->name('home');
    } );

    Route::resource('brands', 'BrandController');
    Route::resource('products', 'ProductController');
});

Route::get('/', 'MainController@index')->name('index');
Route::get('/brands', 'MainController@brands')->name('brands');

Route::group(['prefix' => 'basket'], function (){
    Route::post('/add/{id}','BasketController@basketAdd')->name('basket-add');

    Route::group([
        'middleware'=> 'basket_not_empty'
    ], function (){
        Route::get('/', 'BasketController@basket')->name('basket');
        Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
        Route::post('/remove/{id}','BasketController@basketRemove')->name('basket-remove');
        Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');
    });
});

Route::get('/{brand}', 'MainController@brand')->name('brand');
Route::get('/{brand}/{product?}', 'MainController@product')->name('product');




