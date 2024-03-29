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
$routes->get('admin/allbus','Home::allbus');
$routes->get('admin/busdetail','Home::busdetail');
$routes->get('admin/soforliste','Home::soforliste');
$routes->get('güzergahlar/odeme','Home::odeme');
$routes->get('admin/adminseferler','Home::adminseferler');
$routes->get('koltuksec','Home::koltuksec');
$routes->get('hesabım','Home::hesabım');
$routes->post('giris','Home::giris');
$routes->get('odeme','Home::odeme');
$routes->get('admin/adminselect', 'AdminController::index');
$routes->get('admin/grafik1', 'Home::grafik1');
$routes->get('admin/grafik2', 'Home::grafik2');
$routes->get('koltuksec', 'Home::koltuksec');
$routes->post('kGuncelle', 'Home::guncelle');
$routes->get('kişiselbiletlerim','Home::kişiselbiletlerim');







   



