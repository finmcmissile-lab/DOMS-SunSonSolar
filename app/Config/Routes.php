<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('register', 'Registration::index');
$routes->post('register', 'Registration::index');


$routes->get('login', 'Login::index');
$routes->post('login', 'Login::index');

$routes->get('logout', 'Logout::index');


$routes->get('free-quote', 'FreeQuote::index');
$routes->post('free-quote', 'FreeQuote::index');

$routes->get('schedule-service', 'ScheduleService::index');
$routes->post('schedule-service', 'ScheduleService::index');
