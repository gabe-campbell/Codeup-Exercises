<?php

function parseContacts($filename)
{

    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contentsArray = explode("\n", $contents);
    fclose($handle);
    $contacts = array();

    // todo - read file and parse contacts

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
