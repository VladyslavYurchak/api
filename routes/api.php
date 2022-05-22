<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/desks', 'DeskController');
Route::group(['prefix'=>'desks'], function ()
{
    Route::apiResource('/{desk}/lists', 'ListController');

    Route::group(['prefix'=>'{desk}/lists'], function ()
    {
        Route::apiResource('/{list}/cards', 'CardController');

        Route::group(['prefix'=>'{list}/cards'], function ()
        {
            Route::apiResource('/{card}/tasks', 'TaskController');
        });
    });
});

