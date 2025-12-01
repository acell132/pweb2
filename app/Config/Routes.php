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

$routes->get('/not-authorized', 'Home::notAuthorized');
// $routes->get('/contact', 'Contact::index');
// $routes->post('/contact/send', 'Contact::send');
$routes->get('/contact', 'Contact::index');
$routes->get('/build', 'Build::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/shop/(:segment)', 'Shop::detail/$1');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->post('/contact/sendMessage', 'Contact::sendMessage');

    $routes->get('/cart', 'Cart::index');
    $routes->get('/cart/add/(:num)', 'Cart::add/$1');
    $routes->get('/cart/remove/(:num)', 'Cart::remove/$1');
    $routes->get('/cart/clear', 'Cart::clear');
    $routes->get('/cart/increase/(:num)', 'Cart::increase/$1');
    $routes->get('/cart/decrease/(:num)', 'Cart::decrease/$1');
    $routes->post('cart/checkout', 'Cart::checkout');
    $routes->get('/logout', 'Login::logout');
    $routes->get('/my-orders', 'Order::myorder');
    $routes->get('orders/detail/(:num)', 'Order::detail/$1', ['filter'=>'auth']);
    $routes->post('orders/cancel/(:num)', 'Order::cancel/$1');
    $routes->post('payments/submit', 'Order::submit');
});
// $routes->get('/register', 'Auth::register');
// $routes->post('/register/process', 'Auth::processRegister');

