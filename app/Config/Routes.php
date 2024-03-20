<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::login');
$routes->post('loginSend', 'Auth::loginSend');

$routes->group('admin', ['filter' => 'login'], static function ($routes){
    $routes->get('dashboard', 'Dashboard::index'); //dashboard-url, Dashboard-controller, index-metoda
});

$routes->get('register', 'Auth::register');

