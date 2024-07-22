<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('Productos', 'Home::Productos');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('registro', 'usuario_controller::index');
$routes->get('login', 'Home::login');
$routes->get('terminosdeuso', 'Home::terminosdeuso');


$routes->post('registrar', 'usuario_controller::formValidation');





$routes->get('login', 'Login::index');
$routes->post('auth', 'Login::auth');