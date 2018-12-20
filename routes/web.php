<?php
    Route::get('/', function(){
        return view('frontend.pages.dashboard');
    });

    Route::group(['namespace' => 'Frontend'], function(){
        Route::get('get-started', 'SignUpController@index');
        Route::post('request-signup', 'SignUpController@requestSignup');
        Route::get('explore-files', 'FilesController@explore');
        Route::get('explore-files/category/{category}', 'FilesController@exploreCategory');
        Route::get('search', 'FilesController@search');
        
        Route::group(['middleware' => 'guest'], function(){
            Route::get('sign-in', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'login']);
            Route::post('request-signin', 'Auth\LoginController@login');
        });

        Route::group(['middleware' => 'auth'], function(){
            Route::get('profile', 'ProfileController@index');
            Route::get('downloads/{file}', 'FilesController@download');
            Route::get('change-access/{id}', 'FilesController@changeAccess');
        });

        Route::group(['middleware' => 'auth', 'prefix' => 'profile'], function(){
            Route::get('logout', 'Auth\LoginController@logout');
            Route::get('settings', 'ProfileController@viewSetting');
            Route::post('settings', 'ProfileController@setting');
            Route::get('setting-password', 'ProfileController@viewPasswordSetting');
            Route::post('setting-password', 'ProfileController@passwordSetting');
            Route::get('upload-files', 'ProfileController@uploadView');
            Route::post('upload-files', 'FilesController@uploadFiles');
            Route::get('file/{category}', 'ProfileController@viewFiles');
            Route::get('my-files', 'ProfileController@index');
            Route::get('trash', 'ProfileController@trash');
            Route::get('move-trash/{id}', 'FilesController@moveToTrash');
            Route::get('delete-file/{id}', 'FilesController@delete');
            Route::get('file-update/{id}', 'ProfileController@updateView');
            Route::post('file-update/{id}', 'FilesController@updateFiles');
            Route::get('restore/{id}', 'FilesController@restore');
        });
    });

    // Backend routes

    Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function(){
        Route::get('login', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'admin.login']);
        Route::post('request-login', 'Auth\LoginController@adminLogin');
    });

    Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
        Route::get('/', ['uses' => 'RouterController@index', 'as' => 'admin.dashboard']);
        Route::get('/logout', 'Auth\LoginController@logout');
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
