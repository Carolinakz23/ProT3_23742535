<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('productos', 'Home::productos');
$routes->get('usuarios', 'Home::usuarios');

// Rutas del registro de usuarios
$routes->get('/registro', 'Usuario_Controller::create'); 
$routes->post('/enviar-form', 'Usuario_Controller::formValidation');

// Rutas del Login
$routes->get('/login', 'Login_Controller');
$routes->post('/enviarlogin', 'Login_Controller::auth');
$routes->get('/panel', 'Panel_Controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_Controller::logout');

// Cargar rutas adicionales según el entorno
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

// Rutas del Login
