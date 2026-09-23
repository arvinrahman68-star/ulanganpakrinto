<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->group('admin', function ($routes) {
    $routes->get('login', 'Admin::login');
    $routes->post('login', 'Admin::processLogin');
    $routes->get('logout', 'Admin::logout');
    $routes->get('dashboard', 'Admin::index');
    $routes->get('create', 'Admin::create');
    $routes->post('store', 'Admin::store');
    $routes->get('edit/(:num)', 'Admin::edit/$1');
    $routes->post('update/(:num)', 'Admin::update/$1');
    $routes->get('delete/(:num)', 'Admin::delete/$1');
});
