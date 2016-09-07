<?php

function logMessage($logLevel, $message)
{
    date_default_timezone_set('America/Chicago');
    $logDate = date("Y-m-d  h:i:s");
    $filename = 'log-YYYY-MM-DD.log';
    $handle = fopen($filename, 'a');
    $addMessage = $logDate . " " . "[$logLevel]" ." " . $message;
    fwrite($handle, $addMessage . PHP_EOL);
    fclose($handle);
  
    return $addMessage;
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");
