<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->group(function() {
	Route::get("/project", 'Project\Load@index');
	Route::post("/project", 'Project\Insert@index');
	Route::put("/project", 'Project\Update@index');
	Route::delete("/project/{id}", 'Project\Delete@index');

	Route::get("/todolist", 'Todolist\Load@index');
	Route::post("/todolist", 'Todolist\Insert@index');
	Route::put("/todolist", 'Todolist\Update@index');
	Route::delete("/todolist/{id}", 'Todolist\Delete@index');	
});
