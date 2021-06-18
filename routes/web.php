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
/*--------------------user registation start-------------------------*/
Route::get('/user-info', 'FrontEnd\RegistrationController@reg')->name('user.info');
Route::post('/user-info/store', 'FrontEnd\RegistrationController@regStore')->name('user.info.store');
/*--------------------user registation end-------------------------*/

/*--------------------company information start-------------------------*/
Route::get('/company-info', 'FrontEnd\CompanyController@index')->name('company.info');
Route::post('/company-info/store', 'FrontEnd\CompanyController@store')->name('company.info.store');
/*--------------------company information end-------------------------*/

/*--------------------question information start-------------------------*/
Route::get('/business-type', 'FrontEnd\QuestionController@businessType')->name('business.type');
Route::get('/business-wise/questions/{id}', 'FrontEnd\QuestionController@businessWiseQtn')->name('business.wise.questions');
Route::post('/business-wise/questions/store', 'FrontEnd\QuestionController@businessQtnStore')->name('business.questions.store');
/*--------------------question information end-------------------------*/


/*--------------------user verification information start-------------------------*/
Route::get('user/registation-permission', 'FrontEnd\UserVerifyController@regPermission')->name('registation.permission');
Route::get('user/user-upate', 'FrontEnd\UserVerifyController@updateUser')->name('user.upate');
Route::post('user/user-signup/{id}', 'FrontEnd\UserVerifyController@signupStore')->name('user.signup');
Route::get('user/email-verify', 'FrontEnd\UserVerifyController@emailVerify')->name('email.verify');
Route::post('user/verify-save', 'FrontEnd\UserVerifyController@emailStore')->name('verify.save');
// Route::get('user/user-login', 'FrontEnd\UserVerifyController@userLogin')->name('user.login');
/*--------------------user verification information end-------------------------*/

/*--------------------user dashboard information start-------------------------*/
Route::group(['namespace' => 'FrontEnd', 'middleware' => ['auth','user'] ], function(){
    Route::get('/user-dashboard', 'UserController@userDashboard')->name('user.dashboard');
    Route::get('/user/view-recommendation/{section_id}', 'UserController@viewRecommendation')->name('user.view.recommendation');

    Route::prefix('user')->group(function(){
        Route::get('/profile/view', 'UserProfileController@view')->name('user.profile.view');
        Route::get('/profile/edit/', 'UserProfileController@edit')->name('user.profile.edit');
        Route::post('/profile/update/', 'UserProfileController@update')->name('user.profile.update');
        Route::get('/password/view', 'UserProfileController@passwordView')->name('user.profile.password.view');
        Route::post('/password/update', 'UserProfileController@passwordUpdate')->name('user.profile.password.update');
    });

    Route::prefix('retake')->group(function(){
        Route::get('/business-type', 'RetakeController@businessType')->name('retake.business.type');
        Route::get('/business-wise/questions/{id}', 'RetakeController@businessWiseQtn')->name('retake.business.questions');
        Route::post('/business-wise/questions/store', 'RetakeController@businessQtnStore')->name('retake.business.questions.store'); 
    });

    Route::prefix('company-info')->group(function(){
        Route::get('/view', 'UserController@companyInfoView')->name('company.info.view');
        Route::get('/edit/{id}', 'UserController@companyInfoEidt')->name('company.info.edit');
        Route::post('/update/{id}', 'UserController@companyInfoUpdate')->name('company.info.update');
    });

    

    
});
/*--------------------user dashboard information end-------------------------*/


Auth::routes();

Route::group(['namespace' => 'BackEnd', 'middleware' => ['auth','admin'] ], function(){

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::prefix('profiles')->group(function(){
        Route::get('/view', 'ProfileController@view')->name('profiles.view');
        Route::get('/edit/', 'ProfileController@edit')->name('profiles.edit');
        Route::post('/update/', 'ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'ProfileController@passwordUpdate')->name('profiles.password.update');
    });

    Route::prefix('users')->group(function(){
        Route::get('/active/view', 'UserInfoController@activeView')->name('users.active.view');
        Route::get('/pending/view', 'UserInfoController@pendingView')->name('users.pending.view');
        Route::get('/pending/delte/{id}', 'UserInfoController@pendingDelete')->name('users.pending.delte');
        Route::get('/company/view/{id}', 'UserInfoController@companyView')->name('users.company.view');
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