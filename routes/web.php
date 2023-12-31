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

$router->get('/', function () use ($router) {
    return view('urlform', ['name' => 'James']);
});
$router->post('/staticpages/save', 'MicroUrlController@saveUrl');
$router->get('/staticpages/version', function () use ($router) {
    return $router->app->version();
});
$router->get('/staticpages/terms', function () use ($router) {
    return view('terms');
});

$router->get('/{uniqueid}', 'MicroUrlController@redirect');