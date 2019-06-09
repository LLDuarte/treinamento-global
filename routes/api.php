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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    // * Juridica
    $api->group(['prefix' => 'juridicas'], function ($api) {
        $api->post('/get-cnpj',        'App\Api\V1\Controllers\JuridicaController@get_cnpj');
    });

});