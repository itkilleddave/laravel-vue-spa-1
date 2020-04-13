<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('books', 'BookController@index'); // get books
Route::group(['prefix' => 'book'], function () { // prefix 'books'
    Route::get('edit/{id}', 'BookController@edit'); // get books/{id}
    Route::post('add', 'BookController@store'); // post books/{id}
    Route::post('update/{id}', 'BookController@update'); // patch books/{id}
    Route::delete('delete/{id}', 'BookController@destroy'); // delete books/{id}
});
