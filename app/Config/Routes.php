<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Users::index',['filter'=>'noauth']);
$routes->get('logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register',['filter'=>'noauth']);
$routes->match(['get','post'],'profile', 'Users::profile',['filter'=>'auth']);
$routes->get('dashboard', 'Dashboard::index',['filter'=>'auth']);
$routes->match(['get','post'],'tiendas', 'Tiendas::tiendas',['filter'=>'auth']);
$routes->get('administrar', 'Administrar::administrar',['filter'=>'auth']);
$routes->match(['get','post'],'profile', 'Users::profile',['filter'=>'auth']);
$routes->get('tusfilas', 'TusFilas::tusfilas');
$routes->match(['get','post'],'operadorfilas', 'OperadorFilas::operadorentrada');
$routes->match(['get','post'],'operadorfilasalida', 'OperadorFilas::NumeroSalida');
$routes->match(['get','post'],'crearfila', 'CrearFila::crearfilas');
$routes->get('loginqruser', 'LoginQrUser::loginqruser',['filter'=>'noauth']);
$routes->get('loginqranonimo', 'LoginQrAnonimo::registroanonimo');
$routes->get('vistasfilas', 'VistasFilas::index');
$routes->get('vistapantalla', 'VistaPantalla::index');
$routes->get('/loginadmin', 'LoginAdmin::index');
$routes->get('logout', 'Admin::logout');
$routes->match(['get','post'],'registeradmin', 'LoginAdmin::register');
$routes->match(['get','post'],'profileadmin', 'LoginAdmin::profile');
$routes->get('dashboardadmin', 'DashboardAdmin::index',['filter'=>'adminauth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
