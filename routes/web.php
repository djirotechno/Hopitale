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

Route::get('/','Auth\LoginController@index');

Route::get('post','PostsController@index');
Route::get('data','ProtocolesController@data');

 Route::get('/pharma','PharmaciesController@index')->name('pharma');
 Route::get('/caisse','PharmaciesController@caisse')->name('caisse');


Route::get('logout','Auth\LogoutController@logout')->name('logout');


 Route::get('dash','dashController@index')->name('dash');
/*
|---------------------------------------------------------------------
|  Collection de route pour les categories de produit
|---------------------------------------------------------------------
*/
    Route::get('/categorie','CategoriesController@index');
    Route::post('/categorie/post','CategoriesController@store');
    Route::put('/categorie/{post}','CategoriesController@update');
    Route::delete('/categorie/{post}','CategoriesController@destroy');
/*------------------------------------------------------------------- */

/* @djirotech
|---------------------------------------------------------------------
|  Collection de route pour les  protocole
|---------------------------------------------------------------------
*/

    Route::get('/produit','ProduitsController@index')->name('produit.index')->middleware('auth');
    Route::get('/produit/create','ProduitsController@create')->middleware('auth');
    Route::post('/produit/store','ProduitsController@store')->name('produit.store')->middleware('auth');
    Route::put('/produit/{post}','ProduitsController@update');
    Route::delete('/produit/{post}','ProduitsController@destroy');
/*--------------------------------------------------------------------

 /* @djirotech
|---------------------------------------------------------------------
|  Collection de route pour les  produits
|---------------------------------------------------------------------
*/

   Route::get('/protocole','ProtocolesController@index')->name('protocole.index')->middleware('auth');
   Route::post('/protocole/store','ProtocolesController@store')->name('protocole.store');
   Route::get('/protocole/{show}','ProtocolesController@show')->name('protocole.show');

    /* @djirotech
|---------------------------------------------------------------------
|  Collection de route pour les  produits
|---------------------------------------------------------------------
*/

    Route::get('/patient','PatientsController@index')->name('patient.index')->middleware('auth');
    Route::get('/patient/create','dash\PatientsController@index')->name('dash.patient')->middleware('auth');
    Route::post('/patient/store','PatientsController@store')->name('patient.store');
    Route::get('/patient/{id}','PatientsController@show')->name('patient.show');
    Route::put('/patient/{post}','PatientsController@update')->name('patient.update');
    Route::delete('/patient/{post}','PatientsController@destroy');


/* @djirotech
|---------------------------------------------------------------------
|  Collection de route pour les  consultations
|---------------------------------------------------------------------
*/

    Route::get('/consultation','ConsultationsController@index')->middleware('auth');
    Route::get('/consultation/create','ConsultationsController@create');
    Route::get('/consultation/{id}','ConsultationsController@show')->name('consult.show');
    Route::post('/consultation/{patientid}','ConsultationsController@store')->name('consult.store');
    Route::put('/consultation/{store}','ConsultationsController@update')->name('consult.traitement');
  
    Route::delete('/consultation/{post}','ConsultationsController@destroy');


    Route::post('/addCart','PharmaciesController@addtocart')->name('addTocart')->middleware('auth');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
