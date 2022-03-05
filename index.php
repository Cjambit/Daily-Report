<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//array of unique dates from database
$dates =[];
// array of reports from database
$reports = [];


require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';
require_once 'templates/functions/validation.php';
// require_once('validation.php');

validate();
//connect to database: PHP Data object representing Database connection
$pdo = db_connect();

// submit comment to database
submit_report();

//get all dates from database
get_dates();
// get reports from database
get_reports();

include 'templates/index.php';


?>
