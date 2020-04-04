<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
    DEFAULT URL
*/ 
$route['default_controller'] = 'Dashboard';
$route['assets/(:any)'] = 'assets/$1';
$route['404_override'] = 'controller/page_not_found';
$route['translate_uri_dashes'] = TRUE;
$route['table'] = 'controller/table';

/*
    CUTOM URL
    =========================================
    (:num) is used to determine the relevant segment in the form of numbers
    (:any) is used to determine the relevant segments in all characters
*/ 

// INTRODUCE CLASS
// $route['introduce/set/db'] = 'introduce/setDatabase';
$route['introduce/set/site'] = 'introduce/setSite';

// DASHBOARD CLASS
$route['home'] = 'Dashboard';
