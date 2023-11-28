<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Inicio de sesión del usuario
$routes->get('/usuario/login', 'Login::index');
$routes->post('/usuario/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
// Menú

$routes->get('/login/menu', 'login::menu');
$routes->get('/login/administrarpropiedad', 'login::administrarpropiedad');
$routes->get('/login/generarreportes', 'login::generarreportes');
$routes->get('/login/administrarventas', 'login::administrarventas');

// Administrar propiedades
$routes->get('/propiedad/agregar', 'Propiedad::agregar');
$routes->get('/propiedad/mostrar', 'Propiedad::mostrar');
$routes->post('/propiedad/insert', 'Propiedad::insert');
$routes->get('/propiedad/delete/(:num)', 'Propiedad::delete/$1');
$routes->get('/propiedad/editar/(:num)', 'Propiedad::editar/$1');
// Administrar ventas
$routes->get('/venta/agregar', 'Venta::agregar');
$routes->get('/venta/mostrar', 'Venta::mostrar');
$routes->post('/venta/insert', 'Venta::insert');
$routes->get('/venta/delete/(:num)', 'Venta::delete/$1');
$routes->get('/venta/editar/(:num)', 'Venta::editar/$1');
// Administrar reportes
$routes->get('/reporte/agregar', 'Reporte::agregar');
$routes->get('/reporte/mostrar', 'Reporte::mostrar');
$routes->post('/reporte/insert', 'Reporte::insert');
$routes->get('/reporte/delete/(:num)', 'Reporte::delete/$1');
$routes->get('/reporte/editar/(:num)', 'Reporte::editar/$1');
