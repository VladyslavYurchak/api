<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/product','ProductController');
Route::group(['prefix'=>'product'], function ()
{
    Route::apiResource('/{product}/reviews', 'ReviewController');
});
