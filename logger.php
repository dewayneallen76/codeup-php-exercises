<?php

function logMessage($logLevel, $message)
{
    date_default_timezone_set('America/Chicago');
    // variable for adding date to the log output
    $logDate = date("Y-m-d  h:i:s");
    $filename = date("Y-m-d") . ".log";
    $handle = fopen($filename, 'a');
    // message that will  be logged to the log file
    $addMessage = $logDate . " " . "[$logLevel]" ." " . $message;
    fwrite($handle, $addMessage . PHP_EOL);
    fclose($handle);
  
    return $addMessage;
}
// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an error message.");

// Add logInfo() and logError() functions that call logMessage(), passing the appropriate log level values. Replace the calls to logMessage() with calls to the new functions you just created.
function logError($message) 
{
 	logMessage('ERROR', $message);
}
 function logInfo($message) 
{
	logMessage('INFO', $message);
}

logError("Username or Password is incorrect");
logInfo("User Logged In Successfully");

