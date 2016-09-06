<?php 

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
   	$contacts = explode("\n", $contents);
   	array_pop($contacts);
   	foreach ($contacts as $contact) {
   		explode("|", $contact);
   	}
   	
   	fclose($handle);
   	
    // todo - read file and parse contacts

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));