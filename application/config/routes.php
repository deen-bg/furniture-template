<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['all-categories'] = 'product/all';
$route['all-categories/(:num)'] = 'product/all/$1';

$route['product-category/(:any)'] = 'product/category/$1';
$route['product-category/(:any)/(:any)'] = 'product/category/$1/$1';

$route['product-detail/(:num)'] = 'product/detail/$1';

$route['404_override'] = 'Error';
$route['translate_uri_dashes'] = FALSE;
