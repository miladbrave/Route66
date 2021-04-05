<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/',function (){
   return redirect()->route('home');
});

Route::group(['prefix' => 'fa'], function () {
Route::get('/', 'front\MainController@index')->name('home');
Route::get('/about', 'front\MainController@about')->name('about');
Route::get('/service', 'front\MainController@service')->name('service');
Route::get('/HomesList', 'front\MainController@list')->name('list');
Route::get('/CarsList', 'front\MainController@carlist')->name('carlist');
Route::get('/blog', 'front\MainController@blog')->name('blog');
Route::get('/contact', 'front\MainController@contact')->name('contact');
Route::get('/agent/{name}', 'front\MainController@agent')->name('agent');
Route::get('/detail/{home}/{slug}', 'front\MainController@product')->name('product');
Route::get('/blogDetail/{id}', 'front\MainController@blogDetail')->name('blogDetail');
Route::post('/search', 'front\MainController@search')->name('search');
Route::get('/searchPage', 'front\MainController@searchpage')->name('searchpage');
Route::post('/sendmessage', 'front\MainController@sendmessage')->name('sendmessage');
});

Route::group(['prefix' => 'en'], function () {
    Route::get('/', 'front\EnMainController@index')->name('en.home');
    Route::get('/about', 'front\EnMainController@about')->name('en.about');
    Route::get('/service', 'front\EnMainController@service')->name('en.service');
    Route::get('/HomesList', 'front\EnMainController@list')->name('en.list');
    Route::get('/CarsList', 'front\EnMainController@carlist')->name('en.carlist');
    Route::get('/blog', 'front\EnMainController@blog')->name('en.blog');
    Route::get('/contact', 'front\EnMainController@contact')->name('en.contact');
    Route::get('/agent/{name}', 'front\EnMainController@agent')->name('en.agent');
    Route::get('/detail/{home}/{slug}', 'front\EnMainController@product')->name('en.product');
    Route::get('/blogDetail/{id}', 'front\EnMainController@blogDetail')->name('en.blogDetail');
    Route::post('/search', 'front\EnMainController@search')->name('en.search');
    Route::get('/searchPage', 'front\EnMainController@searchpage')->name('en.searchpage');
    Route::post('/sendmessage', 'front\EnMainController@sendmessage')->name('en.sendmessage');
});

Route::group(['prefix' => 'tr'], function () {
    Route::get('/', 'front\TurController@index')->name('tur.home');
    Route::get('/about', 'front\TurController@about')->name('tur.about');
    Route::get('/service', 'front\TurController@service')->name('tur.service');
    Route::get('/HomesList', 'front\TurController@list')->name('tur.list');
    Route::get('/CarsList', 'front\TurController@carlist')->name('tur.carlist');
    Route::get('/blog', 'front\TurController@blog')->name('tur.blog');
    Route::get('/contact', 'front\TurController@contact')->name('tur.contact');
    Route::get('/agent/{name}', 'front\TurController@agent')->name('tur.agent');
    Route::get('/detail/{home}/{slug}', 'front\TurController@product')->name('tur.product');
    Route::get('/blogDetail/{id}', 'front\TurController@blogDetail')->name('tur.blogDetail');
    Route::post('/search', 'front\TurController@search')->name('tur.search');
    Route::get('/searchPage', 'front\TurController@searchpage')->name('tur.searchpage');
    Route::post('/sendmessage', 'front\TurController@sendmessage')->name('tur.sendmessage');
});


Route::group(['prefix' => 'administrator','middleware' => 'IsAdmin'], function () {
    Route::get('/', 'back\DashboardController@index')->name('dashboard');
    Route::resource('home','back\HomeProductController');
    Route::resource('car','back\CarProductController');
    Route::resource('properties','back\PropertiesController');
    Route::resource('slider','back\SliderController');
    Route::resource('blog','back\BlogController');
    Route::resource('brand','back\BrandController');
    Route::resource('consult','back\ConslutController');
    Route::resource('message','back\MessageController');
    Route::resource('admin','back\adminController');

    Route::post('photosave','back\HomeProductController@storepic')->name('photosave');
    Route::get('photodestroy/{id}','back\HomeProductController@photodestroy')->name('photodestroy');
    Route::post('prosearch','back\DashboardController@search')->name('prosearch');
    Route::post('removeimage','back\HomeProductController@removeimage')->name('removeimage');
    Auth::routes();
});
Route::get('dashboard-login','front\MainController@login')->name('login');
Route::post('Login','Auth\LoginController@login')->name('login');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
