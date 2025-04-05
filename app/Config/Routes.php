<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// CUSTOMERS
$routes->get('/customers', 'Customers::index');
$routes->get('/customers/create', 'Customers::createView');
$routes->post('/customers/store', 'Customers::store');
$routes->get('/customers/update/(:num)', 'Customers::updateView/$1');
$routes->put('/customers/update', 'Customers::update');