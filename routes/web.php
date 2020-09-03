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

//Lion: One-shot pages, do not need controllers

Route::get('/about', function () {
    return view('about');
});

Route::get('/admin/documentation', function () {
    return view('admins.documentation');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();


//Lion: Resourceful pages, need controllers (rest api)

Route::get('/admin/{user}', 'AdminsController@index')->name('admin.show');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

//Lion: REST Resourceful pages, /resource/create, CREATE action
Route::get('/email/create','EmailsController@create');
Route::get('/equipment/create','EquipmentsController@create');
Route::get('/homepage/create','HomepagesController@create');
Route::get('/mailinglist/create','MailinglistsController@create');
Route::get('/subdomainaccess/create','SubdomainaccessController@create');
Route::get('/vm/create','VmsController@create');
Route::get('/vpn/create','VpnsController@create');


//Lion: REST Resourceful pages, /resource/index, INDEX action (for an user)
Route::get('/email/index','EmailsController@index');
Route::get('/equipment/index','EquipmentsController@index');
Route::get('/homepage/index','HomepagesController@index');
Route::get('/mailinglist/index','MailinglistsController@index');
Route::get('/subdomainaccess/index','SubdomainaccessController@index');
Route::get('/vm/index','VmsController@index');
Route::get('/vpn/index','VpnsController@index');

//Lion: REST Resourceful pages, /resource/{resource_identification}, SHOW action

//Lion: REST Resourceful pages, /resource, STORE action
Route::post('/email','EmailsController@store');
Route::post('/equipment','EquipmentsController@store');
Route::post('/homepage','HomepagesController@store');
Route::post('/mailinglist','MailinglistsController@store');
Route::post('/subdomainaccess','SubdomainaccessController@store');
Route::post('/vm','VmsController@store');
Route::post('/vpn','VpnsController@store');
