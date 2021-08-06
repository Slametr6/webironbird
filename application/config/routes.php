<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['service/(:any)'] = 'service/detail';
$route['detail/(:any)'] = 'media/berita';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
