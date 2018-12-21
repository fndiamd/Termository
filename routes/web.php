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
        Route::get('/', ['uses' => 'FileController@index', 'as' => 'admin.dashboard']);
        Route::get('/logout', 'Auth\LoginController@logout');
        //Admin get
        Route::get('admin-view', 'AdminController@index');
        Route::get('admin-createView', 'AdminController@createView');
        Route::get('admin-updateView/{id}', 'AdminController@updateView');
        Route::get('admin-delete/{id}', 'AdminController@delete');

        // Admin post
        Route::post('admin-create', 'AdminController@create');
        Route::post('admin-update/{id}', 'AdminController@update');

        //Category get
        Route::get('category-view', 'CategoryController@index');
        Route::get('category-createView', 'CategoryController@createView');
        Route::get('category-updateView/{id}', 'CategoryController@updateView');
        Route::get('category-delete/{id}', 'CategoryController@delete');

        // Category post
        Route::post('category-create', 'CategoryController@create');
        Route::post('category-update/{id}', 'CategoryController@update');

        //feature get
        Route::get('feature-view', 'FeatureController@index');
        Route::get('feature-createView', 'FeatureController@createView');
        Route::get('feature-updateView/{id}', 'FeatureController@updateView');
        Route::get('feature-delete/{id}', 'FeatureController@delete');

        // feature post
        Route::post('feature-create', 'FeatureController@create');
        Route::post('feature-update/{id}', 'FeatureController@update');

        //User get
        Route::get('user-view', 'UserController@index');
        Route::get('user-createView', 'UserController@createView');
        Route::get('user-updateView/{id}', 'UserController@updateView');
        Route::get('user-delete/{id}', 'UserController@delete');

        //User Post
        Route::post('user-create', 'UserController@create');
        Route::post('user-update', 'UserController@update');

        //File Get
        Route::get('file-view', 'FileController@index');
        Route::get('file-createView', 'FileController@createView');
        Route::get('file-updateView/{id}', 'FileController@updateView');
        Route::get('file-delete/{id}', 'FileController@delete');

        // File Post
        Route::get('file-create', 'FileController@create');
        Route::get('file-update', 'FileController@update');

        //Order get
        Route::get('order-view', 'OrderController@index');
        Route::get('order-createView', 'OrderController@createView');
        Route::get('order-updateView/{id}',  'OrderController@updateView');
        Route::get('order-delete/{id}', 'OrderController@delete');

        //Order Post
        Route::post('order-create', 'OrderController@create');
        Route::post('order-update', 'OrderController@update');

        //Log
        Route::get('log-download-view', 'RouterController@logDownloadView');
        Route::get('log-view-view', 'RouterController@logViewView');

    });

?>
