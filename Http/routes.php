<?php

Route::group(['middleware' => 'web', 'prefix' => 'module2', 'namespace' => 'Modules\Module2\Http\Controllers'], function()
{
    Route::get('/', 'Module2Controller@index');
});
