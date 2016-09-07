<?php 

function salesReport($filename) 
{
	// opening file report.txt and making an array 
	$salesUnits = 0; // variable to count salesUnits 
	$filename = 'report.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$report = explode("\n", $contents);
	// iteration through array to remove unnecessary information
	for ($i = 0; $i <= 13; $i++) {
		array_shift($report);
	}
	foreach ($report as $employee) {
		$reportArray = explode(",", $employee);
	// created associative array to display information for each employee 
		$reportAssociativeArray = [];
		$reportAssociativeArray["employee number"] = $reportArray[0];
		$reportAssociativeArray["first name"] = $reportArray[1];
		$reportAssociativeArray["last name"] = $reportArray[2];
		$reportAssociativeArray["sales units"] = $reportArray[3];
		$salesUnits += $reportArray[3];
		array_push($report, $reportAssociativeArray);
		array_shift($report);
	}
	// sort array by sales units highest to lowest 
	foreach ($report as $key => $row) {
		$soldUnit[$key] = $row['sales units'];
		} 
	array_multisort($soldUnit, SORT_DESC, $report);
	// echo information for sales report
	echo "Total Number of Employees: " . count($report) . PHP_EOL;
	echo "Total Number of Units Sold: " . $salesUnits . PHP_EOL;
	echo "Average Total Sales: " . $salesUnits/count($report) . PHP_EOL;
	echo "----------------------------------------------------". PHP_EOL;
	echo "SalesUnits    Name   Employee Number" .PHP_EOL;
	// foreach loop to iterate through all employees and echo information 
	foreach($report as $salesReportList => $key) {
		echo $key['sales units']. "     ". $key['first name'] . $key['last name'] . "      " . $key['employee number'] . PHP_EOL;
	}
	fclose($handle);
}

salesReport('report.txt');


