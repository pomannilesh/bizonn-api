<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->group(['prefix' => 'api'], function () use ($router) {

$router->group(['middleware' => ['cors','saveAudit']], function () use ($router) { 
	//$router->post('kiosk/register', ['uses' => 'AccountController@register']);

	$router->group(['prefix' => 'retailer'], function () use ($router) {
		$router->post('add', ['uses' => 'RetailerController@register']);
		$router->post('list', ['uses' => 'RetailerController@list']);
		//$router->post('setActiveAccount',  		['uses' => 'DemoController@setActiveAccount']);
	});
	
	$router->post('/sendOtp','AccountController@sendOtp' );
	$router->post('/verifyOtp','AccountController@verifyOtp' );
	
	$router->post('/register','AccountController@register' );
	$router->post('/login','AccountController@login' );
	
});