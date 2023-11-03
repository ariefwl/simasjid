<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Backend Route
$routes->get('/', 'AdminController::index');
$routes->get('/dashboard', 'AdminController::index');

$routes->get('/takmir', 'PengurusController::index');