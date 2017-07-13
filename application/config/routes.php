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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'User/User';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Admin routes*/
$route['admin'] = 'Admin/Admin';
$route['Admin'] = 'Admin/Admin';

/* user routes*/
$route['user'] = 'User/User';
$route['discover'] = 'User/User/discover';
$route['home'] = 'User/User';
$route['detail/(:num)'] = 'User/User/details/$1';
$route['restaurant/(:num)'] = 'User/User/restaurant/$1';
$route['activity/(:num)'] = 'User/User/activity/$1';
$route['actvities/(:num)'] = "User/User/activities/$1";
$route['sight/(:num)'] = "User/User/sight/$1";
$route['event/(:num)'] = "User/User/events/$1";
$route['activity/(:num)'] = "User/User/activity/$1";
$route['visas/(:num)'] = "User/User/visas/$1";
$route['besttime/(:num)'] = "User/User/besttime/$1";
$route['cost/(:num)'] = "User/User/cost/$1";
$route['health/(:num)'] = "User/User/health/$1";
$route['search'] = "User/User/search";