<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/login', 'Bengkel::login');
$routes->get('/login', 'Bengkel::login');
$routes->get('/home', 'Home::index');
$routes->get('bengkel/menu', 'Bengkel::menu');
$routes->get('bengkel/login', 'Bengkel::login');
$routes->get('bengkel/register', 'Bengkel::register');
$routes->post('bengkel/loginin', 'Bengkel::loginin');
$routes->post('bengkel/registerin', 'Bengkel::registerin');
$routes->get('bengkel/berhasilregister', 'Bengkel::berhasilregister');
