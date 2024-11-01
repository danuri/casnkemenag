<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pengumuman', 'Home::pengumuman');
$routes->get('formasi/cpns', 'Home::cpns');
$routes->get('formasi/cpppkteknis', 'Home::cpppkteknis');
$routes->get('formasi/cpppknakes', 'Home::cpppknakes');
$routes->get('faq', 'Home::faq');
$routes->get('persyaratan', 'Home::persyaratan');
$routes->get('pg', 'Home::pg');
$routes->get('informasi', 'Informasi::index');
$routes->get('sktt', 'Home::sktt');
$routes->get('progresverif', 'Home::progresverif');

$routes->group("lokasi", function ($routes) {
    $routes->get('', 'Lokasi::index');
    $routes->post('', 'Lokasi::auth');
    $routes->get('getkab/(:any)', 'Lokasi::getkab/$1');
    $routes->post('save', 'Lokasi::save');
    $routes->get('redisauth/(:num)/(:num)', 'Lokasi::redisauth/$1/$2');
});
