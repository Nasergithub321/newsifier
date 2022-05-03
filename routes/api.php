<?php

use App\Http\Controllers\UsersController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

	
Route::group(['prefix' => 'v1'], function () {
	
	Route::group(['prefix' => 'user'], function () {
		Route::get('/{id}/karma-position', [UsersController::class, 'index']);
		Route::get('/create-test-data', [UsersController::class, 'create']);
	});
	
});
