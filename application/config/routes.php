<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'sogocontroller/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['events'] = 'sogocontroller/events';
$route['aboutus'] = 'sogocontroller/aboutus';
$route['projects'] = 'sogocontroller/projects';
$route['contact'] = 'sogocontroller/contact';
$route['news'] = 'sogocontroller/news';
$route['news/(:any)'] = 'sogocontroller/news_page/$1';