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

Route::get('/', 'FrontEnd\HomeController@index')->name('frontEnd.home');
/*--------------------user registtation start-------------------------*/
Route::get('/user-info', 'FrontEnd\RegistrationController@reg')->name('user.info');
Route::post('/user-info/store', 'FrontEnd\RegistrationController@regStore')->name('user.info.store');
/*--------------------user registtation end-------------------------*/

/*--------------------company information start-------------------------*/
Route::get('/company-info', 'FrontEnd\CompanyController@index')->name('company.info');
Route::post('/company-info/store', 'FrontEnd\CompanyController@store')->name('company.info.store');
/*--------------------company information end-------------------------*/

/*--------------------company information start-------------------------*/
Route::get('/business-type', 'FrontEnd\QuestionController@businessType')->name('business.type');
Route::get('/business-wise/questions/{id}', 'FrontEnd\QuestionController@businessWiseQtn')->name('business.wise.questions');
// Route::post('/company-info/store', 'FrontEnd\QuestionController@store')->name('company.info.store');
/*--------------------company information end-------------------------*/


Auth::routes();

Route::group(['namespace' => 'BackEnd', 'middleware' => ['auth'] ], function(){

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::prefix('profiles')->group(function(){
        Route::get('/view', 'ProfileController@view')->name('profiles.view');
        Route::get('/edit/', 'ProfileController@edit')->name('profiles.edit');
        Route::post('/update/', 'ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'ProfileController@passwordUpdate')->name('profiles.password.update');
    });

    Route::prefix('business-type')->group(function(){
    	Route::get('/view', 'BusinessTypeController@index')->name('business.type.view');
    	Route::get('/add', 'BusinessTypeController@create')->name('business.type.add');
     	Route::post('/save', 'BusinessTypeController@store')->name('business.type.save');
     	Route::get('/edit/{id}', 'BusinessTypeController@edit')->name('business.type.edit');
     	Route::post('/update/{id}', 'BusinessTypeController@update')->name('business.type.update');
    	Route::get('/delete/{id}', 'BusinessTypeController@delete')->name('business.type.delete');
    });

    Route::prefix('section')->group(function(){
    	Route::get('/view', 'SectionController@index')->name('section.view');
    	Route::get('/add', 'SectionController@create')->name('section.add');
     	Route::post('/save', 'SectionController@store')->name('section.save');
     	Route::get('/edit/{id}', 'SectionController@edit')->name('section.edit');
     	Route::post('/update/{id}', 'SectionController@update')->name('section.update');
    	Route::get('/delete/{id}', 'SectionController@delete')->name('section.delete');
    });

    Route::prefix('question')->group(function(){
        Route::get('/view', 'QuestionController@index')->name('question.view');
        Route::get('/add', 'QuestionController@create')->name('question.add');
        Route::post('/save', 'QuestionController@store')->name('question.save');
        Route::get('/edit/{id}', 'QuestionController@edit')->name('question.edit');
        Route::post('/update/{id}', 'QuestionController@update')->name('question.update');
        Route::get('/delete/{id}', 'QuestionController@delete')->name('question.delete');
    });


});

