<?php


// Admin route

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

// Api Routes

Route::get('api/marketing-image-data', 'ApiController@marketingImageData');

Route::get('api/user-chart', 'ApiController@userChartData');

Route::get('api/widget-data', 'ApiController@widgetData');

// Authentication Routes...

Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@login');
Route::post('logout', 'Auth\AuthController@logout');

// Home page route

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

// Marketing Image

Route::resource('marketing-image', 'MarketingImageController');

// Password Reset Routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Privacy

Route::get('privacy', 'PagesController@privacy');

// Profile Route

Route::get('show-profile', ['as' => 'show-profile',
                            'uses' => 'ProfileController@showProfileToUser']);

Route::get('my-profile', ['as' => 'my-profile',
                          'uses' => 'ProfileController@myProfile']);

Route::resource('profile', 'ProfileController');

// Registration Routes...

Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

// Settings

Route::get('settings', 'SettingsController@edit');
Route::post('settings', ['as' => 'userUpdate',
                         'uses' => 'SettingsController@update']);

// Social routes

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


// Terms of Service

Route::get('terms-of-service', 'PagesController@terms');

//Test route

Route::get('test',  ['middleware' => 'auth', 'uses' => 'TestController@index']);

// User route

Route::resource('user', 'UserController');

// Widget routes

Route::get('widget/create', ['as' => 'widget.create', 'uses' => 'WidgetController@create']);

Route::get( 'widget/{id}-{slug?}', ['as' => 'widget.show', 'uses' => 'WidgetController@show']);

Route::resource('widget', 'WidgetController', ['except' => ['show', 'create']]);


