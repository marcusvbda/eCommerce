<?php
Route::get('/phpinfo', function()
{
	phpinfo();
});  
Route::get('laravel-version', function() 
{
    $laravel = app();
    return "Your Laravel version is ".$laravel::VERSION;
});

Route::get('', function() 
{
    return redirect( asset("admin/") );
});


Route::group(['prefix' => 'default'], function () 
{
    Route::put('rawQuery', 'DefaultCrudController@rawQuery')->name("default.rawQuery");
    Route::post('checkMasterPass', 'DefaultCrudController@checkMasterPass')->name("default.checkMasterPass");
});

Route::post('setSession', 'ParametrosController@setSession')->name("parametros.setSession");
