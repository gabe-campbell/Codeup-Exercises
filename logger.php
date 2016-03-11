<?php

function logMessage($logLevel, $message)
{
  // todo - complete this function

  $filename = "log-YYYY-MM-DD.log";

  $handle = fopen($filename, 'a');

  $contentString = fread($handle, filesize($filename));
  
  fclose($handle);
}


logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
