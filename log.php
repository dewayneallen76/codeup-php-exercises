<?php 
// Create a file in your exercises directory called Log.php
// 
class Log 
{
// A property called $filename where you store the name of the file for the log.
	public $filename;
// A method called logMessage() that will take in a log level and message as before. It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.
	public function logMessage($logLevel,$message) 
	{
    	$handle = fopen($this->filename, 'a');
    	$addMessage = date("Y-m-d  h:i:s") . " " . "[$logLevel]" ." " . $message;
    	fwrite($handle, $addMessage . PHP_EOL);
    	fclose($handle);
  
    	return $addMessage;
	}
// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
	public function info($message) 
	{
		$this->logMessage('INFO', $message);
	}

	public function error($message) 
	{
		$this->logMessage('ERROR', $message);
	}
}


 ?>