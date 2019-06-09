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

Route::get('/',     								['as'=>'home', 						'uses'=>'HomeController@index']);
Route::get('/home', 								['as'=>'home', 						'uses'=>'HomeController@index']);

Route::match(['get', 'post'], 'register', function(){
	return redirect('/home');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    // Enderecos
	Route::group(['prefix' => 'enderecos'], function () {
		Route::get('/',                               		                    ['as'=>'enderecos.index',              			'uses'=>'EnderecoController@index']);
		Route::get('/create',                         		                    ['as'=>'enderecos.create',             			'uses'=>'EnderecoController@create']);
		Route::post('/',                              		                    ['as'=>'enderecos.store',              			'uses'=>'EnderecoController@store']);
        Route::match(['put', 'patch'], '/{endereco}', 	                    	['as'=>'enderecos.update',             			'uses'=>'EnderecoController@update']);
        Route::delete('/{endereco}',                  	                    	['as'=>'enderecos.destroy',            			'uses'=>'EnderecoController@destroy']);
        Route::get('/{endereco}/edit',                	                    	['as'=>'enderecos.edit',               			'uses'=>'EnderecoController@edit']);
        Route::get('/{endereco}',                      				    		['as'=>'enderecos.show',    		   			'uses'=>'EnderecoController@show']);
    });

    // Pessoas Fisicas
	Route::group(['prefix' => 'fisicas'], function () {
		Route::get('/',                               		                    ['as'=>'fisicas.index',              			'uses'=>'FisicaController@index']);
		Route::get('/create',                         		                    ['as'=>'fisicas.create',             			'uses'=>'FisicaController@create']);
		Route::post('/',                              		                    ['as'=>'fisicas.store',              			'uses'=>'FisicaController@store']);
        Route::match(['put', 'patch'], '/{fisica}', 	                    	['as'=>'fisicas.update',             			'uses'=>'FisicaController@update']);
        Route::delete('/{fisica}',                  	                    	['as'=>'fisicas.destroy',            			'uses'=>'FisicaController@destroy']);
        Route::get('/{fisica}/edit',                	                    	['as'=>'fisicas.edit',               			'uses'=>'FisicaController@edit']);
        Route::get('/{fisica}',                      				    		['as'=>'fisicas.show',    		   			    'uses'=>'FisicaController@show']);
    });

    // Pessoas Jurídicas
	Route::group(['prefix' => 'juridicas'], function () {
		Route::get('/',                               		                    ['as'=>'juridicas.index',              			'uses'=>'JuridicaController@index']);
		Route::get('/create',                         		                    ['as'=>'juridicas.create',             			'uses'=>'JuridicaController@create']);
		Route::post('/',                              		                    ['as'=>'juridicas.store',              			'uses'=>'JuridicaController@store']);
        Route::match(['put', 'patch'], '/{juridica}', 	                    	['as'=>'juridicas.update',             			'uses'=>'JuridicaController@update']);
        Route::delete('/{juridica}',                  	                    	['as'=>'juridicas.destroy',            			'uses'=>'JuridicaController@destroy']);
        Route::get('/{juridica}/edit',                	                    	['as'=>'juridicas.edit',               			'uses'=>'JuridicaController@edit']);
        Route::get('/{juridica}',                      				    		['as'=>'juridicas.show',    		   			'uses'=>'JuridicaController@show']);
    });

});