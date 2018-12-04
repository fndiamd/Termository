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
    });

?>
