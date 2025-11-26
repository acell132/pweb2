<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/register', 'Register::index');
$routes->post('/auth/doRegister', 'Register::doRegister');

// $routes->get('/contact', 'Contact::index');
// $routes->post('/contact/send', 'Contact::send');

$routes->get('/contact', 'Contact::index');
$routes->post('/contact/sendMessage', 'Contact::sendMessage');

$routes->get('/build', 'Build::index');

$routes->get('/shop', 'Shop::index');
$routes->get('/shop/(:segment)', 'Shop::detail/$1');

$routes->get('/cart', 'Cart::index');
$routes->get('/cart/add/(:num)', 'Cart::add/$1');
$routes->get('/cart/remove/(:num)', 'Cart::remove/$1');
$routes->get('/cart/clear', 'Cart::clear');
$routes->get('/cart/increase/(:num)', 'Cart::increase/$1');
$routes->get('/cart/decrease/(:num)', 'Cart::decrease/$1');
// $routes->get('/register', 'Auth::register');
// $routes->post('/register/process', 'Auth::processRegister');


