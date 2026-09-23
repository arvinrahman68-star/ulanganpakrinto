<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'HomeController::index');

$routes->group('admin', static function ($routes) {
    $routes->get('login', 'AdminController::login');
    $routes->post('login', 'AdminController::attemptLogin');
    $routes->get('logout', 'AdminController::logout');
    
    $routes->get('/', 'AdminController::index');
    $routes->get('menu/create', 'AdminController::create');
    $routes->post('menu/store', 'AdminController::store');
    $routes->get('menu/edit/(:num)', 'AdminController::edit/$1');
    $routes->post('menu/update/(:num)', 'AdminController::update/$1');
    $routes->get('menu/delete/(:num)', 'AdminController::delete/$1');
});
