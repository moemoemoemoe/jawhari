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
Route::get('/', 'GuestController@index')->name('indexpage');
Route::get('single_article/{id}', 'GuestController@single_article')->name('singlearticle');

Route::get('categories_articles/{id}', 'GuestController@categories_articles')->name('categories_articles');
Route::get('contact', 'GuestController@contact')->name('contact');


Route::get('/first', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard/manage_categories', 'AdminController@manage_categories')->name('manage_categories');
Route::post('dashboard/manage_categories', 'AdminController@manage_categories_save')->name('manage_categories');
Route::get('dashboard/delete_cat/{id}', 'AdminController@delete_cat')->name('delete_cat');


Route::get('dashboard/manage_articles', 'ArticlesController@manage_articles')->name('manage_articles');
Route::post('dashboard/manage_articles', 'ArticlesController@manage_articles_save')->name('manage_articles');
Route::get('dashboard/delete_article/{id}', 'ArticlesController@delete_article')->name('delete_article');


Route::get('dashboard/manage_works', 'WorkController@manage_works')->name('manage_works');
Route::post('dashboard/manage_works', 'WorkController@manage_works_save')->name('manage_works');
Route::get('dashboard/delete_works/{id}', 'WorkController@delete_works')->name('delete_works');

Route::get('dashboard/manage_services', 'ServicesController@manage_services')->name('manage_services');
Route::post('dashboard/manage_services', 'ServicesController@manage_services_save')->name('manage_services');
Route::get('dashboard/delete_service/{id}', 'ServicesController@delete_service')->name('delete_service');