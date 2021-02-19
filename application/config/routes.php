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
$route['default_controller'] = 'Ngo';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(?i)about-us'] = 'Ngo/about_us';
$route['(?i)gallery'] = 'Ngo/gallery';
$route['(?i)services'] = 'Ngo/services';
$route['(?i)contact-us'] = 'Ngo/contact';
$route['(?i)signup'] = 'Ngo/signup';
$route['(?i)login'] = 'Ngo/login';
$route['(?i)logout'] = 'Ngologin/logout';
$route['(?i)update-profile'] = 'Ngologin/updateprofile';
$route['(?i)document-upload'] = 'Ngologin/documentupload';
$route['(?i)document-uploading'] = 'Ngologin/userregistrationdocumentupload';
$route['(?i)forms'] = 'Ngologin/forms';
$route['(?i)sahara-details'] = 'Ngologin/saharadetails';
$route['(?i)bank-detail'] = 'Ngologin/bankdetail';
$route['(?i)payment'] = 'Ngologin/payment';
$route['(?i)success'] = 'Ngologin/success';
$route['(?i)failure'] = 'Ngologin/failure';
$route['(?i)history'] = 'Ngologin/history';
$route['(?i)donate'] = 'Ngo/donate';
$route['(?i)donatesuccess'] = 'Ngo/donatesuccess';
$route['(?i)donatefailure'] = 'Ngo/donatefailure';
$route['(?i)download'] = 'Ngo/download';
$route['(?i)print'] = 'Ngologin/print';
$route['(?i)forgot-password'] = 'Ngo/forgot_password';
$route['(?i)find-id'] = 'Ngo/find_id';
$route['(?i)change-password'] = 'Ngologin/change_password';





