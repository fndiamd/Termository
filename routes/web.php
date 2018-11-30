<?php
    Route::get('/', function(){
      return view('frontend.pages.dashboard');
    });

    Route::group(['namespace' => 'Frontend'], function(){
      Route::get('sign-in', 'LoginController@index');
      Route::get('get-started', 'SignUpController@index');
      Route::post('request-signup', 'SignUpController@requestSignup');
    });

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
