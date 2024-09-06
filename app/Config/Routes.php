<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

//$routes->get('/test', static function()  {
//    if (service('auth')->check()) {
//        echo 'admin'; die();
//    }
//    return view('login');
//});
$routes->group('admin', ['filter' => 'session'], static function ($routes) {
    $routes->get('/', fn() => view('admin/index'));

});