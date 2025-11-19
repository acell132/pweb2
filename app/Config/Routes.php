<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
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
// $routes->get('/register', 'Auth::register');
// $routes->post('/register/process', 'Auth::processRegister');


