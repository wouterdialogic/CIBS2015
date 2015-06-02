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
|	http://codeigniter.com/user_guide/general/routing.html
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

$route['index/(:any)'] = 'index';
//dit werkt, verwijst vanuit http://localhost/git/cibs2015/index.php/index/sortable naar class index function sortable
$route['index/sortable'] = 'index/sortable';

//dit werkt, verwijst vanuit http://localhost/git/cibs2015/index.php/index/sortable2 naar class index function all
$route['index/sortable2'] = 'index/all';
$route['index/jquery'] = 'index/jquery';

//dit werkt, verwijst vanuit http://localhost/git/cibs2015/index.php/sortable3 naar class Sortable3 function index
//dit werkt NIET als je deze class in het bestand index.php zet onder de andere class (index)
//geleerd: zet 1 class neer per .php bestand
$route['sortable3'] = 'sortable3';

$route['playground'] = 'playground';



$route['(:any)'] = 'playground';
$route['(:any)'] = 'index';
$route['(:any)'] = 'playground';
/*
$route['index/(:any)'] = 'index';
$route['playground/(:any)'] = 'playground2';
$route['index'] = 'index';
$route['(:any)'] = 'index';
$route['default_controller'] = 'index';

$route['playground'] = 'playgroun22d';
$route['(:any)'] = 'playground';
$route['default_controller'] = 'playground';
*/

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
