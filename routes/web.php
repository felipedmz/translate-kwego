<?php

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

$router->get('/status', function () use ($router) {
    return "Service Up and Running!\n" . $router->app->version();
});


$router->post('translate/number', [
    'as' => 'translate.number', 'uses' => 'TranslateController@number'
]);