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
