<?php 
// Set timezone so that file will write correctly 
date_default_timezone_set('America/Chicago');
// Create a log_test.php file in your exercises directory. At the top of log_test.php, be sure to require_once 'Log.php';
require_once 'log.php';
// Create an instance of the Log class
$NewInstance = new Log();
// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
$NewInstance->filename = "log-". date("Y-m-d") . ".log";
// Call the methods logMessage(), info(), and error() with to test the functionality of each.
$NewInstance->info("This is an info message.");
$NewInstance->error("This is an error message.");
 
 ?>