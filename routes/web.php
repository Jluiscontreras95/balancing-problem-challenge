<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
/*
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
*/

//Api
// $router->post('/api/v1/short-urls', 'ShortUrlController@store');

$router->group(['middleware' => 'bearer'], function () use ($router) {
    $router->post('/api/v1/short-urls', 'ShortUrlController@store');
    // Se pueden seguir añadiendo rutas protegidas por el middleware de bearer token
});