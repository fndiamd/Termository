<?php
    Route::get('/', function(){return view('frontend.pages.dashboard');});
    Route::group(['namespace' => 'Frontend'], function(){
        Route::get('sign-in', 'LoginController@index');
        Route::get('get-started', 'SignUpController@index');
        Route::post('request-signup', 'SignUpController@requestSignup');
    });

?>
