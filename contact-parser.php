<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contactsArray = explode("\n", $contents);


    // $outputArray = [];

    foreach($contactsArray as $key => $contact) {
        $personArray = explode("|", $contact);
        
        $phoneNumber = substr($personArray[1], 0, 3);
        $phoneNumber .= "-";
        $phoneNumber .= substr($personArray[1], 3, 3);
        $phoneNumber .= "-";
        $phoneNumber .= substr($personArray[1], 6);

        $name = $personArray[0];

        $contacts[$key]['name'] = $name;
        $contacts[$key]['number'] = $phoneNumber;


        // $outputArray[$key] = [

        //     "name" => $name,
        //     "number" => $phoneNumber

        // ];

    }

    // $contacts = $contactsArray;
    
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));










