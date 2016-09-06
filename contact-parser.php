<?php 

function parseContacts($filename)
{
	// opening file, and creating an array with file contents
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
   	$contacts = explode("\n", $contents);
   	// removing empty string from the end of the array 
   	array_pop($contacts);
   	// loop to convert array strings to an array inside the contacts array 
   	foreach ($contacts as $contact) {
   		$contactArray = explode("|", $contact);
   	// empty array created to make an associative array 	
   		$associativeArray = [];
   		$associativeArray["name"] = $contactArray[0];
   	// created variables so that - could be addeded to the phone key in the associative array	
   		$areacode = substr($contactArray[1], 0, 3);
   		$prefix = substr($contactArray[1], 3, 3);
   		$number	= substr($contactArray[1], 6, 4);
   		
   		$associativeArray["phone"] = "$areacode-$prefix-$number";
   	
   		array_push($contacts, $associativeArray);
   		array_shift($contacts);
	} 
	// close file
   	fclose($handle);
   	
    // todo - read file and parse contacts

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));