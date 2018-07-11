<?php

$router->get('/', function () use ($router) {
 return $router->app->version();
});
$router->post('/login', 'LoginController@login');
$router->post('/register', 'UserController@register');
$router->get('/user', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);
$router->get('/billetera/consultar', ['middleware' => 'auth', 'uses' =>  'BilleteraController@get_billetera']);
$router->post('/billetera/crear',['middleware' => 'auth', 'uses' =>  'BilleteraController@create']);