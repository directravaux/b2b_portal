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

Auth::routes();

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', array(
    'as' => 'dashboard',
    'uses' => 'DashboardController@index',
))->middleware(['guest']);

Route::get('verify/{token}', array(
    'as' => 'verify',
    'uses' => 'DashboardController@verifyUser',
));

Route::group(['prefix' => 'check'], function () {
    Route::post('user', array(
        'as' => 'check.user',
        'uses' => 'Auth\RegisterController@checkUserName',
    ));
    Route::post('store', array(
        'as' => 'check.store',
        'uses' => 'Auth\RegisterController@checkStoreName',
    ));
    Route::post('email', array(
        'as' => 'check.email',
        'uses' => 'Auth\RegisterController@checkEmail',
    ));
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('home', array(
        'as' => 'home',
        'uses' => 'HomeController@index',
    ));

    Route::get('password', array(
        'as' => 'changepassword.get',
        'uses' => 'HomeController@getChangePassword',
    ));

    Route::post('password', array(
        'as' => 'changepassword.post',
        'uses' => 'HomeController@postChangePassword',
    ));

    // client route
    Route::group(['prefix' => 'client', 'middleware' => ['client']], function () {
        Route::get('/', array(
            'as' => 'client.home',
            'uses' => 'ClientController@index',
        ));

        Route::post('profile', array(
            'as' => 'client.profile',
            'uses' => 'ClientController@profile',
        ));

        Route::get('vendor', array(
            'as' => 'client.vendor',
            'uses' => 'ClientController@price',
        ));

        Route::get('price', array(
            'as' => 'client.price',
            'uses' => 'ClientController@pricePost',
        ));

        Route::post('checkout', array(
            'as' => 'client.checkout',
            'uses' => 'ClientController@checkoutPost',
        ));

        Route::post('store', array(
            'as' => 'client.store',
            'uses' => 'ClientController@checkStoreName',
        ));
    });

    // vendor route
    Route::group(['prefix' => 'vendor', 'middleware' => ['vendor']], function () {
        Route::get('/', array(
            'as' => 'vendor.home',
            'uses' => 'VendorController@index',
        ));

        Route::post('profile', array(
            'as' => 'vendor.profile',
            'uses' => 'VendorController@profile',
        ));

        Route::get('verify', array(
            'as' => 'vendor.verify',
            'uses' => 'VendorController@verify',
        ));

        Route::get('store', array(
            'as' => 'vendor.store',
            'uses' => 'VendorController@store',
        ));

        Route::post('verify', array(
            'as' => 'verify.post',
            'uses' => 'VendorController@verifyPost',
        ));

        Route::get('plan', array(
            'as' => 'vendor.plan',
            'uses' => 'VendorController@plan',
        ));

        Route::get('price', array(
            'as' => 'vendor.price',
            'uses' => 'VendorController@pricePost',
        ));

        Route::post('checkout', array(
            'as' => 'vendor.checkout',
            'uses' => 'VendorController@checkoutPost',
        ));
    });

});
/* Start Static Pages */
Route::get('/a-propos-de-nous', 'StaticpagesController@about');
Route::get('/comment-ca-marche', 'StaticpagesController@howitwork');
Route::get('/rejoignez-nous', 'StaticpagesController@joinus');
Route::get('/faqs-clients', 'StaticpagesController@faqsclients');
Route::get('/faqs-professionnel', 'StaticpagesController@faqsseller');
Route::get('/politique-de-confidentialite', 'StaticpagesController@confidentialite');
Route::get('/politique-de-cookies', 'StaticpagesController@cookies');
Route::get('/conditions-generales', 'StaticpagesController@cgenerales');
Route::get('/contactez-nous', 'StaticpagesController@contact');
/* End Static Pages */

/* Admin Routes */
Route::get('/index', function () {
    return view('admin.index');
});
/* End Admin Routes */

/* wizard */
Route::get('/wizard', function () {
    return view('vendor.wizard');
});
/* End Wizard */

