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
        Route::get('admin-view', 'RouterController@adminView');
        Route::get('user-view', 'RouterController@userView');
        Route::get('category-view', 'RouterController@categoryView');
        Route::get('file-view', 'RouterController@fileView');
        Route::get('order-view', 'RouterController@orderView');
        Route::get('log-download-view', 'RouterController@logDownloadView');
        Route::get('log-view-view', 'RouterController@logViewView');
        Route::get('fitur-view', 'RouterController@fiturView');
    });

?>
