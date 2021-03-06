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

$router->get('/', function () {
    return view('home');
});

$router->get('/home', 'Controller@index');
$router->get('/about', 'Controller@about');

$router->get('/chain', 'ChainController@index');
$router->get('/chain/view', 'ChainController@view');
$router->get('/chain/bfb', 'ChainController@checkFile');
//$router->get('/view', 'ChainController@view');
$router->post('/chain/add', 'ChainController@addtransaction');
$router->get('/chain/fill', 'ChainController@filltrans');