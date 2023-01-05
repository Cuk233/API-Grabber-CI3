<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'user';

$route['aircraft/aircraft_data'] = 'aircraft_data';
$route['aircraft/aircraft_data_insert'] = 'aircraft_data/insert';
$route['aircraft/aircraft_data_update'] = 'aircraft_data/update';

$route['aircraft/aircraft_type'] = 'aircraft_type';
$route['aircraft/aircraft_type_insert'] = 'aircraft_type/insert';
$route['aircraft/aircraft_type_update'] = 'aircraft_type/update';

$route['documents/document_type'] = 'doc_type';
$route['documents/document_type_insert'] = 'doc_type/insert';
$route['documents/document_type_update'] = 'doc_type/update';

$route['documents/job_type'] = 'job_type';
$route['documents/job_type_insert'] = 'job_type/insert';
$route['documents/job_type_update'] = 'job_type/update';

$route['documents/status'] = 'status';
$route['documents/status_insert'] = 'status/insert';
$route['documents/status_update'] = 'status/update';

$route['documents/pic'] = 'pic';
$route['documents/pic_insert'] = 'pic/insert';
$route['documents/pic_update'] = 'pic/update';

$route['work_order/ppe_wo'] = 'ppe_wo';
$route['work_order/ppe_wo_insert'] = 'ppe_wo/insert';
$route['work_order/ppe_wo_update'] = 'ppe_wo/update';

$route['work_order/ndt_wo'] = 'ndt_wo';
$route['work_order/ndt_wo_insert'] = 'ndt_wo/insert';
$route['work_order/ndt_wo_update'] = 'ndt_wo/update';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
