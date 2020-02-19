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

//.....................BackEnd...............................

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Schema\Visitor\CreateSchemaSqlCollector;
use Illuminate\Support\Facades\Schema as FacadesSchema;
use Illuminate\Support\Facades\Auth;

Route::get('login', 'BackEnd\LoginController@login')->middleware('CheckLogOut');
Route::post('login', 'BackEnd\LoginController@postLogin');

// Backend/produc
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    Route::get('','BackEnd\LoginController@getIndex');
    Route::get('logout','BackEnd\LoginController@getLogout');
    // category Group
    Route::group(['prefix' => 'category'], function () {
        //Category
        Route::get('', 'BackEnd\CategoryController@getCategory');
        //Category post add
        Route::post('', 'BackEnd\CategoryController@getCategoryAdd');
        //Category Edit
        Route::get('edit', 'BackEnd\CategoryController@getCategoryEdit');
         //Category post Edit
         Route::post('edit', 'BackEnd\CategoryController@postCategoryEdit');
        });
    Route::group(['prefix' => 'product'], function () {
        //List product
        Route::get('', 'BackEnd\ProductController@GetProduct');
        //Add product
        Route::get('add', 'BackEnd\ProductController@GetProductAdd');
        //post Add product
        Route::post('add', 'BackEnd\ProductController@PostProductAdd');
        //Edit product
        Route::get('edit', 'BackEnd\ProductController@GetProductEdit');
        Route::post('edit', 'BackEnd\ProductController@PostProductEdit');
        //detail-attr
        Route::get('detail-attr', 'BackEnd\ProductController@GetProductDetailAttr');
        //edit-attr
        Route::get('edit-attr', 'BackEnd\ProductController@GetProductEditAttr');


        Route::get('edit-value', 'BackEnd\ProductController@GetProductEditValue');
        // add variant
        Route::get('add-variant', 'BackEnd\ProductController@GetProductAddVarian');
        // Edit variant
        Route::get('edit-variant', 'BackEnd\ProductController@GetProductEditVarian');

    });
    // Order Group
    Route::group(['prefix' => 'order'], function () {
        //Oder
        Route::get('', 'BackEnd\OrderCotroller@getOrder');
        // Order Process
        Route::get('process', 'BackEnd\OrderCotroller@getOrderProcess');
        // Order detail
        Route::get('detail', 'BackEnd\OrderCotroller@getOrderDetail');
    });
    // Comment Group
    Route::group(['prefix' => 'comment'], function () {
        //comment
        Route::get('', 'BackEnd\CommentController@getcomment');
        // Comment Edit
        Route::get('edit', 'BackEnd\CommentController@getCommEdit');
    });
});

//............................ FrontEnd.........................
// index
Route::get('', function () {
    return view('frontend.index');
});
//about
Route::get('about', function () {
    return view('frontend.about');
});
// contact
Route::get('contact', function () {
    return view('frontend.contact');
});
// group shop
Route::group(['prefix' => 'shop'], function () {
    //shop
    Route::get('','FrontEnd\ShopControoler@getshop');
    //detail
    Route::get('detail','FrontEnd\ShopControoler@getdetail');
});
Route::group(['prefix' => 'cart'], function () {
    //cart
    Route::get('','FrontEnd\CartController@getCart');
    //Checkout
    Route::get('checkout','FrontEnd\CartController@getCheckout');
    //Complete
    Route::get('complete','FrontEnd\CartController@getComplete');
});

