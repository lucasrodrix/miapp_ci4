<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->get('/products/(:num)', 'Products::show/$1');
$routes->get('/products/(:alpha)/(:num)', 'Products::cat/$1/$2');
$routes->get('/products/transaction', 'Products::transaction');

$routes->view('productsList/(:alpha)', 'products_list');

$routes->group('admin', static function($routes){
    $routes->get('/products', 'Admin\Products::index');
});