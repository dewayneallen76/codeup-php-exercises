<?php 

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
   	$contacts = explode("\n", $contents);
   	array_pop($contacts);
   	foreach ($contacts as $contact) {
   		$contactArray = explode("|", $contact);
   		$associativeArray = [];
   		$associativeArray["name"] = $contactArray[0];
   		$associativeArray["phone"] = $contactArray[1];
   		array_push($contacts, $associativeArray);
   		array_shift($contacts);
	} 
   	fclose($handle);
   	
    // todo - read file and parse contacts

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));