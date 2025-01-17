<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('', ['filter' => 'saveLastUrl'], function ($routes) {
    $routes->get('PilihJasa', 'PilihJasa::index');
    $routes->get('Pembayaran', 'Pembayaran::index');
});

$routes->group('', function ($routes) {
    $routes->get('login', 'LoginRegister::login');
    $routes->post('login/authenticate', 'LoginRegister::authenticate');

    $routes->get('register', 'LoginRegister::register');
    $routes->post('register/store', 'LoginRegister::store'); // Tambahkan jika fungsi store ada di controller

    $routes->get('forgot-password', 'LoginRegister::forgotPassword');
    $routes->post('forgot-password/process', 'LoginRegister::processForgotPassword'); // Tambahkan jika fungsi ini ada
    $routes->get('logout', 'LoginRegister::logout');

});

$routes->group('dashboard', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
});


$routes->get('/', 'Home::index');
$routes->get('Home/Signin', 'Home::Signin');
$routes->get('Home/PilihJasa', 'Home::PilihJasa');
$routes->get('PilihJasa', 'PilihJasa::index');
$routes->post('PilihJasa/submit', 'PilihJasa::submit');
$routes->get('Layanan', 'Layanan::index');
$routes->get('PilihJasa', 'Layanan::PilihJasa');
$routes->get('PilihJasa', 'Home::PilihJasa');
$routes->get('/PilihJasa/submit', 'PilihJasa::submit', ['filter' => 'auth']);
$routes->post('/PilihJasa/submit', 'PilihJasa::submit');
$routes->get('DetailPembayaran', 'DetailPembayaran::index');
$routes->get('Berhasil', 'DetailPembayaran::Berhasil');
$routes->get('Berhasil', 'Berhasil::index');
$routes->get('Profile', 'Profile::index');
$routes->get('EditProfile', 'Profile::edit');
$routes->post('Profile/update', 'Profile::update');
$routes->get('Dashboard', 'AdminController::index', ['filter' => 'admin']); // Halaman dashboard admin








