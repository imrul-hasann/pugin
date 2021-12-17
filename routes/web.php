<?php


//website all route:
Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/djs', "LandingPageController@djs")->name("djs");
Route::get('/schedule', "LandingPageController@schedule")->name("schedule");
Route::get('/blog', "LandingPageController@blog")->name("blog");
Route::get('/blog-details', "LandingPageController@blogDetails")->name("blog-details");
Route::get('/gallery', "LandingPageController@gallery")->name("gallery");
Route::get('/faq', "LandingPageController@faq")->name("faq");
Route::get('/contact', "LandingPageController@contact")->name("contact");

//Admin All route:
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login.post');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('home', 'Admin\DashboardController@index')->name('admin.dashboard');

    Route::get('get-event', 'Admin\EventController@getEventAjax')->name('get_event.ajax');
    Route::resource('events', 'Admin\EventController');

    Route::get('get-rj', 'Admin\RjController@getRjAjax')->name('get_rj.ajax');
    Route::resource('rj', 'Admin\RjController');

    Route::get('get-gallery', 'Admin\GalleryController@getGalleryAjax')->name('get_gallery.ajax');
    Route::resource('gallery', 'Admin\GalleryController');

    Route::get('get-slides', 'Admin\SlidesController@getSlidesAjax')->name('get_slides.ajax');
    Route::resource('slides', 'Admin\SlidesController');

    Route::get('contacts', 'Admin\ContactController@index')->name('contacts.index');

});


Route::group(['namespace' => 'Customer\Auth'], function() {

    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'RegisterController@createAdmin')->name('register');

    Route::get('/login', 'LoginController@showLoginForm')->name('login');

    Route::post('/login', 'LoginController@adminLogin');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    //facebook login
    Route::get('login/facebook', 'FacebookController@redirectToProvider');
    Route::get('login/facebook/callback', 'FacebookController@handleProviderCallback');

    //Google login
    Route::get('login/google', 'GoogleController@redirectToProvider');
    Route::get('login/google/callback', 'GoogleController@handleProviderCallback');

});

//Route::auth();

Route::middleware('auth:customer')->group(function () {

    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

    Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
    Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');

});
