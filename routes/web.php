<?php

use Illuminate\Support\Facades\Route;
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
//Frontend
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/gioi-thieu','App\Http\Controllers\HomeController@about');
Route::get('/dang-nhap','App\Http\Controllers\HomeController@login');
Route::get('/dang-ki','App\Http\Controllers\HomeController@register');
Route::get('/lien-he','App\Http\Controllers\HomeController@contact');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');

//Danh Muc San Pham Trang Chu
Route::get('/danh-muc-san-pham/{category_id}','App\Http\Controllers\CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}','App\Http\Controllers\BrandProduct@show_brand_home');
Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\ProductController@details_product');
 
//Backend
 Route::get('/admin','App\Http\Controllers\AdminController@index');
 Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
 Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
 Route::get('/logout','App\Http\Controllers\AdminController@logout');

 //CategoryProduct
 Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
 Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
 Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');
 Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');
 Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
 Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');
 Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
 Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');

 //BrandProduct
 Route::get('/add-brand-product','App\Http\Controllers\BrandProduct@add_brand_product');
 Route::get('/edit-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@edit_brand_product');
 Route::get('/delete-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@delete_brand_product');
 Route::get('/all-brand-product','App\Http\Controllers\BrandProduct@all_brand_product');
 Route::get('/unactive-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@unactive_brand_product');
 Route::get('/active-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@active_brand_product');
 Route::post('/save-brand-product','App\Http\Controllers\BrandProduct@save_brand_product');
 Route::post('/update-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@update_brand_product');

 //Product
 Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
 Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
 Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');
 Route::get('/all-product','App\Http\Controllers\ProductController@all_product');
 Route::get('/unactive-product/{brand_id}','App\Http\Controllers\ProductController@unactive_product');
 Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');
 Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
 Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');

 //Cart
// Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
// Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
 Route::get('/Add-cart/{product_id}','App\Http\Controllers\CartController@AddCart');

//sendmail
Route::get('/send-mail','App\Http\Controllers\HomeController@send_mail');

//Banner
Route::get('/all-slide','App\Http\Controllers\BannerController@all_slide');
Route::get('/add-slide','App\Http\Controllers\BannerController@add_slide');
Route::post('/insert-slide','App\Http\Controllers\BannerController@insert_slide');