<?php

namespace Config;

use CodeIgniter\Config\Services;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// --------------------------------------------------------------------
// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
// --------------------------------------------------------------------
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// --------------------------------------------------------------------
// DEFAULT CONFIG
// --------------------------------------------------------------------
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// --------------------------------------------------------------------
// APLIKASI UTAMA
// --------------------------------------------------------------------
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

// --------------------------------------------------------------------
// ROUTE UNTUK BENGKEL KITA
// --------------------------------------------------------------------
$routes->group('bengkel', function ($routes) {
    $routes->get('menu', 'Bengkel::menu');
    $routes->get('login', 'Bengkel::login');
    $routes->get('register', 'Bengkel::register');
    $routes->post('loginin', 'Bengkel::loginin');
    $routes->post('registerin', 'Bengkel::registerin');
    $routes->get('berhasilregister', 'Bengkel::berhasilregister');
});

// --------------------------------------------------------------------
// ROUTE UNTUK MYTH AUTH
// --------------------------------------------------------------------
// Pastikan Autoload.php memiliki: 'Myth\Auth' => ROOTPATH . 'vendor/myth/auth/src'
$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], function ($routes) {
    // Login
    $routes->get('login', 'AuthController::login', ['as' => 'login']);
    $routes->post('login', 'AuthController::attemptLogin');

    // Register
    $routes->get('register', 'AuthController::register', ['as' => 'register']);
    $routes->post('register', 'AuthController::attemptRegister');

    // Activation
    $routes->get('activate-account', 'AuthController::activateAccount', ['as' => 'activate-account']);
    $routes->get('resend-activate-account', 'AuthController::resendActivateAccount', ['as' => 'resend-activate-account']);

    // Forgot & Reset Password
    $routes->get('forgot', 'AuthController::forgotPassword', ['as' => 'forgot']);
    $routes->post('forgot', 'AuthController::attemptForgot');
    $routes->get('reset-password', 'AuthController::resetPassword', ['as' => 'reset-password']);
    $routes->post('reset-password', 'AuthController::attemptReset');

    // Logout
    $routes->get('logout', 'AuthController::logout', ['as' => 'logout']);
});

// --------------------------------------------------------------------
// Tambahan routing environment jika ada
// --------------------------------------------------------------------
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
