<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Require configuration files
require ('app/config/Init.php');

// Require libraries
require ('app/libraries/Router.php');

// Require Layouts class
require ('public/Layouts.php');

// Add routes and their corresponding files.
Router::addRoute('/', Init::pages_dir('home'));
Router::addRoute('/about', Init::pages_dir('about'));
Router::addRoute('/contact', Init::pages_dir('contact'));

// Handle the request.
Router::handleRequest();