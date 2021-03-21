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
    return $router->app->version();
});

// API to get all item in inventory
$router->get('/api/inventory', 'OrderProcessController@getAllItem');

// API to update item in inventory
$router->put('/api/inventory', 'OrderProcessController@updateItem');

// API to create item in inventory
$router->post('/api/inventory', 'OrderProcessController@inputItem');



// API to get all order
$router->get('/api/order', 'OrderProcessController@getAllOrder');

// API to update order
$router->put('/api/order', 'OrderProcessController@updateOrder');

// API to input order
$router->post('/api/order', 'OrderProcessController@makeOrder');



// API to proceed checkout
$router->post('/api/checkout', 'OrderProcessController@checkoutFunction');

// API to get order information
$router->post('/api/orderinfo', 'OrderProcessController@getOrderInfo');
