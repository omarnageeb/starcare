<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\contactUsController;

use App\Http\Controllers\front\homeController;

use App\Http\Controllers\admin\partnersController;




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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'front',
'prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]

], function() {


    Route::get('index', [homeController::class, 'index']) -> name('index');

// solutions

    Route::get('solutions', 'ourSolutionsController@solutions') -> name('solutions');

    Route::get('solutions/{addSolutions_id}','ourSolutionsController@infoSolutions') -> name('infoSolutions');

// end solutions



// news

    Route::get('news', 'ourNewsController@news') -> name('news');

    Route::get('news/{addNews_id}','ourNewsController@infoNews') -> name('infoNews');

// end news

// about us

    Route::get('about-us', 'aboutUsController@aboutUs') -> name('aboutUs');

// end about

// contact us
/*
    Route::get('contact-us', 'contactUsController@contactUs') -> name('contactUs');
*/

Route::get('contact-us', [contactUsController::class, 'contactUs']) -> name('contactUs');

// end contact

});



