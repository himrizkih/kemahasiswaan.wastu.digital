<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['berita_detail/(:any)'] = 'berita/detail/$1';
$route['beasiswa_detail/(:any)'] = 'beasiswa/detail/$1';
$route['kegiatan_detail/(:any)'] = 'kegiatan/detail/$1';
$route['administrator']='admin/kemahasiswaan/masuk';

$route['masuk']='admin/kemahasiswaan/masuk_bea_mhs';
$route['notifikasi']='admin/kemahasiswaan/beasiswa/notifikasi';
$route['profil']='admin/kemahasiswaan/beasiswa/dashboard_mhs';
$route['profil/beasiswa']='admin/kemahasiswaan/beasiswa/beasiswa_mhs';

$route['login']='admin/kemahasiswaan/masuk_bea_dsn';
$route['dashboard']='admin/kemahasiswaan/beasiswa/dashboard_dsn';

$route['default_controller'] = 'Beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;