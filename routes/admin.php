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


Route::group(['namespace'=> 'admin', 'middleware' => 'auth:admin'], function() {

    Route::get('/' ,'DashboardController@indexAdmin') -> name('admin.dashboard');

//solutions

    Route::get('addSolutions' ,'solutionsController@addSolutions') -> name('addSolutions');

    Route::post('solutionsStore' ,'solutionsController@solutionsStore') -> name('addSolutionsPost');

    Route::get('deleteSolution/{addSolutions_id}', 'solutionsController@delete')->name('solution.delete');


    Route::get('editSolutions/{addSolutions_id}', 'solutionsController@editSolutions') ->name('solution.edit');

    Route::post('updateSolutions/{addSolutions_id}', 'solutionsController@UpdateSolutions')->name('solution.update');

//end solutions


//news

    Route::get('addNews' ,'newsController@addNews') -> name('addNews');

    Route::post('newsStore' ,'newsController@newsStore') -> name('addnewsPost');

    Route::get('deleteNews/{addnews_id}', 'newsController@delete')->name('news.delete');

    Route::get('edit/{addnews_id}', 'newsController@editNews') ->name('news.edit');

    Route::post('update/{addnews_id}', 'newsController@UpdateNews')->name('news.update');

//end news


//aboutus

    Route::get('addAboutUs' ,'aboutUsController@addAboutUs') -> name('addAboutUs');

    Route::post('aboutUsPost' ,'aboutUsController@aboutUsPost') -> name('aboutUsPost');

    Route::get('deleteaboutUs/{addAboutUs_id}', 'aboutUsController@delete')->name('aboutUs.delete');

    Route::get('editAboutUs/{addAboutUs_id}', 'aboutUsController@editAboutUs') ->name('aboutUs.edit');

    Route::post('updateAboutUs/{addAboutUs_id}', 'aboutUsController@UpdateAboutUs')->name('aboutUs.update');


//end about us


//contact us

    Route::get('addContactUs' ,'contactUsController@addContactUs') -> name('addContactUs');

    Route::post('ContactUsPost' ,'contactUsController@ContactUsPost') -> name('ContactUsPost');

    Route::get('deleteContactUs/{addContactUs_id}', 'contactUsController@delete')->name('ContactUs.delete');

    Route::get('editContactUs/{addContactUs_id}', 'contactUsController@editContactUs') ->name('ContactUs.edit');

    Route::post('updateContactUs/{addContactUs_id}', 'contactUsController@UpdateContactUs')->name('ContactUs.update');

//end contact us



//slider

    Route::get('addSlider' ,'sliderController@addSlider') -> name('addSlider');

    Route::post('sliderPost' ,'sliderController@sliderPost') -> name('sliderPost');

    Route::get('deleteslider/{addSlider_id}', 'sliderController@delete')->name('slider.delete');

    Route::get('editSlider/{addSlider_id}', 'sliderController@editSlider') ->name('slider.edit');

    Route::post('updateSlider/{addSlider_id}', 'sliderController@UpdateSlider')->name('slider.update');

//end slider



//partners

    Route::get('addPartners' ,'partnersController@addPartners') -> name('addPartners');

    Route::post('partnerPost' ,'partnersController@partnerPost') -> name('partnerPost');

    Route::get('deletepartner/{addPartners_id}', 'partnersController@delete')->name('partner.delete');

//end partners


//clients

    Route::get('addClients' ,'clientsController@addClients') -> name('addClients');

    Route::post('addClientsPost' ,'clientsController@addClientsPost') -> name('addClientsPost');

    Route::get('deleteClient/{addClients_id}', 'clientsController@delete')->name('client.delete');

    Route::get('editClients/{clients_id}', 'clientsController@editClients') ->name('client.edit');

    Route::post('updateClients/{clients_id}', 'clientsController@UpdateClients')->name('client.update');

//end clients


//logo

    Route::get('addlogo' ,'LogoController@addlogo') -> name('addlogo');

    Route::post('addlogoPost' ,'LogoController@addlogoPost') -> name('logoPost');

    Route::get('deletelogo/{addlogo_id}', 'LogoController@delete')->name('logo.delete');

//end logo



//aboutClients

Route::get('addAboutClient' ,'addAboutClientsController@addAboutClient') -> name('addAboutClient');

Route::post('addAboutClientsPost' ,'addAboutClientsController@addAboutClientPost') -> name('addAboutClientPost');

Route::get('deleteAboutClient/{addAboutClients_id}', 'addAboutClientsController@delete')->name('aboutClient.delete');

Route::get('editAboutClient/{addAboutClients_id}', 'addAboutClientsController@editAboutClient') ->name('aboutClient.edit');

Route::post('updateAboutClient/{addAboutClients_id}', 'addAboutClientsController@UpdateAboutClient')->name('aboutClient.update');

//end aboutClients


//services

Route::get('addServices' ,'servicesController@addServices') -> name('addServices');

Route::post('addServicesPost' ,'servicesController@addServicesPost') -> name('addServicesPost');

Route::get('deleteServices/{addServices_id}', 'servicesController@delete')->name('services.delete');

Route::get('editServices/{addServices_id}', 'servicesController@editServices') ->name('services.edit');

Route::post('UpdateServices/{addServices_id}', 'servicesController@UpdateServices')->name('services.update');

//end services



 });






Route::group(['namespace'=> 'admin', 'middleware' => 'guest:admin'], function() {

    Route::get('login' ,'LoginController@getLogin') -> name('get.loginGamark');
    Route::post('login' ,'LoginController@Login') -> name('admin.login');

});
