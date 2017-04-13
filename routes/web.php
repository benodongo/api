<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api){
    $api->get('/', function (){
        return ['test' => true];
    });
    $api->get('/variants', 'App\Http\Controllers\api\VariantsController@index');
    // Items
    $api->get('/items', 'App\Http\Controllers\api\ItemsController@index');
    $api->post('/items', 'App\Http\Controllers\api\ItemsController@store');
    $api->get('/items/{id}', 'App\Http\Controllers\api\ItemsController@show');
    $api->patch('/items/{id}', 'App\Http\Controllers\api\ItemsController@update');
//    $api->destroy('/items/{id}', 'App\Http\Controllers\api\ItemsController@destroy');
});
