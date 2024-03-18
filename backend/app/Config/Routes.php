<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('deneme','Home::deneme');
$routes->get('güzergahlar','Home::güzergahlar');
$routes->get('form','Home::form');
$routes->get('admin','Home::admin');
$routes->get('giriş-yap','Home::login');
$routes->get('seferkontrol','Home::seferkontrol');
$routes->get('biletkontrolü','Home::biletkontrolü');
$routes->get('kayıtol','Home::kayıtol');
$routes->get('login','Home::login');
$routes->get('adminlogin','Home::adminlogin');
$routes->get('login/forgetpassword','Home::forgetpassword');
$routes->get('login/kullanıcı','Home::kullanıcı');


