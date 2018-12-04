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
<<<<<<< HEAD
        //Admin
        Route::get('admin-view', 'RouterController@adminView');
        //User
        Route::get('user-view', 'UserController@index');
        Route::get('user-createView', 'UserController@createView');
        Route::get('user-create', 'UserController@create');
        Route::get('user-updateView', 'UserController@updateView');
        Route::get('user-update', 'UserController@update');
        Route::get('user-delete', 'UserController@delete');
        //Category
        Route::get('category-view', 'RouterController@categoryView');
        //File
        Route::get('file-view', 'FileController@index');
        Route::get('file-createView', 'FileController@createView');
        Route::get('file-create', 'FileController@create');
        Route::get('file-updateView', 'FileController@updateView');
        Route::get('file-update', 'FileController@update');
        Route::get('file-delete', 'FileController@delete');
        //Order
        Route::get('order-view', 'OrderController@index');
        Route::get('order-createView', 'OrderController@createView');
        Route::get('order-create', 'OrderController@create');
        Route::get('order-updateView',  'OrderController@updateView');
        Route::get('order-update', 'OrderController@update');
        Route::get('order-deleteView', 'OrderController@deleteView');
        Route::get('order-delete', 'OrderController@delete');
        //Log
        Route::get('log-download-view', 'RouterController@logDownloadView');
        Route::get('log-view-view', 'RouterController@logViewView');
        //Fitur
        Route::get('fitur-view', 'RouterController@fiturView');
=======
        // admin get
        Route::get('admin-view', 'AdminController@index');
        Route::get('admin-createView', 'AdminController@createView');
        Route::get('admin-updateView/{id}', 'AdminController@updateView');
        // admin post
        Route::post('admin-create', 'AdminController@create');
        Route::post('admin-delete/{id}', 'AdminController@delete');
        Route::post('admin-update', 'AdminController@update');

        // category get
        Route::get('category-view', 'CategoryController@index');
        Route::get('category-createView', 'CategoryController@createView');
        Route::get('category-updateView/{id}', 'CategoryController@updateView');
        // category post
        Route::post('category-create', 'CategoryController@create');
        Route::post('category-delete/{id}', 'CategoryController@delete');
        Route::post('category-update', 'CategoryController@update');

        // fitur get
        Route::get('fitur-view', 'FiturController@index');
        Route::get('fitur-createView', 'FiturController@createView');
        Route::get('fitu-updateView/{id}', 'FiturController@updateView');
        // category post
        Route::post('fitur-create', 'FiturController@create');
        Route::post('fitur-delete/{id}', 'FiturController@delete');
        Route::post('fitur-update', 'FiturController@update');

        Route::get('user-view', 'RouterController@userView');
        Route::get('file-view', 'RouterController@fileView');
        Route::get('order-view', 'RouterController@orderView');
        Route::get('log-download-view', 'RouterController@logDownloadView');
        Route::get('log-view-view', 'RouterController@logViewView');
>>>>>>> 175b9df9c6ea4f96f7c3030c7ab1d14fe1054312
    });

?>
