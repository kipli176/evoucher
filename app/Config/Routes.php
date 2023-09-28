<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tutup', 'Home::tutup');
// $routes->get('/verifikasi', 'Home::verif');
$routes->get('/verifikasi/(:any)', 'Home::verif/$1'); 
$routes->get('/barcode/(:any)', 'Home::barcode/$1'); 
$routes->post('/verifikasi', 'Home::nopol');
$routes->post('/barcode', 'Home::simpan');
