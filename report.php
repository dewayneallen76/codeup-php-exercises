<?php 

function salesReport($filename) 
{
	$filename = 'report.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$reportArray = explode("\n", $contents);
	for ($i = 0; $i <= 13; $i++) {
		array_shift($reportArray);
	}
	

	fclose($handle);
	return($reportArray);
}

var_dump(salesReport('report.txt'));


