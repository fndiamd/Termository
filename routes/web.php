<?php
    Route::get('/', function(){
        return view('frontend.pages.dashboard');
    });

    Route::group(['namespace' => 'Frontend'], function(){
        Route::get('get-started', 'SignUpController@index');
        Route::post('request-signup', 'SignUpController@requestSignup');
        Route::get('explore-files', 'FilesController@explore');

        Route::group(['middleware' => 'guest'], function(){
          Route::get('sign-in', 'Auth\LoginController@showLoginForm');
          Route::post('request-signin', 'Auth\LoginController@login');
        });

        Route::get('profile', 'ProfileController@index')->middleware('auth');

        Route::group(['middleware' => 'auth', 'prefix' => 'profile'], function(){
          Route::get('logout', 'Auth\LoginController@logout');
          Route::get('settings', 'ProfileController@viewSetting');
          Route::post('settings', 'ProfileController@setting');
        });
    });

    // Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function(){
    //   Route::get('login', 'Auth\LoginController@showLoginForm');
    //   Route::post('request-login', 'Auth\LoginController@login');
    // });

    Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function(){
        Route::get('/', 'RouterController@index');
        //Admin get
        Route::get('admin-view', 'AdminController@index');
        ROute::get('admin-createView', 'AdminController@createView');
        Route::get('admin-updateView/{id}', 'AdminController@updateView');

        // Admin post
        Route::post('admin-create', 'AdminController@create');
        ROute::post('admin-delete/{id}', 'AdminController@delete');
        Route::post('admin-update', 'AdminController@update');

        //Category get
        Route::get('category-view', 'CategoryController@index');
        ROute::get('category-createView', 'CategoryController@createView');
        Route::get('category-updateView/{id}', 'CategoryController@updateView');

        // Category post
        Route::post('category-create', 'CategoryController@create');
        ROute::post('category-delete/{id}', 'CategoryController@delete');
        Route::post('category-update', 'CategoryController@update');

        //fitur get
        Route::get('fitur-view', 'CategoryController@index');
        ROute::get('fitur-createView', 'CategoryController@createView');
        Route::get('fitur-updateView/{id}', 'CategoryController@updateView');

        // fitur post
        Route::post('fitur-create', 'FiturController@create');
        ROute::post('fitur-delete/{id}', 'FiturController@delete');
        Route::post('fitur-update', 'FiturController@update');

        //User get
        Route::get('user-view', 'UserController@index');
        Route::get('user-createView', 'UserController@createView');
        Route::get('user-updateView/{id}', 'UserController@updateView');

        //User Post
        Route::post('user-create', 'UserController@create');
        Route::post('user-update', 'UserController@update');
        Route::post('user-delete/{id}', 'UserController@delete');

        //File Get
        Route::get('file-view', 'FileController@index');
        Route::get('file-createView', 'FileController@createView');
        Route::get('file-updateView/{id}', 'FileController@updateView');

        // File Post
        Route::get('file-create', 'FileController@create');
        Route::get('file-update', 'FileController@update');
        Route::get('file-delete/{id}', 'FileController@delete');

        //Order get
        Route::get('order-view', 'OrderController@index');
        Route::get('order-createView', 'OrderController@createView');
        Route::get('order-updateView/{id}',  'OrderController@updateView');

        //Order Post
        Route::post('order-create', 'OrderController@create');
        Route::post('order-update', 'OrderController@update');
        Route::post('order-delete/{id}', 'OrderController@delete');

        //Log
        Route::get('log-download-view', 'RouterController@logDownloadView');
        Route::get('log-view-view', 'RouterController@logViewView');
    });

?>
