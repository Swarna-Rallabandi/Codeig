<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['API/Topic/(:any)']='api/topic/$1';


$route['posts']='posts/index';
$route['chook_times']='chook_times/index';
//$route['chookdata']='chookdata/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']='shed_53/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
