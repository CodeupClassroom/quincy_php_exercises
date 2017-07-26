<?php

// $filename to write to should be the string "log" concatenated with today's YYYY-MM-DD date format concat with .log at the end.
// example: if we run logger.php on 26 July 2017, 
// the $filename should be log-2017-07-26.log
// if we run logger.php on 31 July 2017
// the $filename should be log-2017-07-31.log]]]


function append($filename, $stringToWrite) 
{
    $handle = fopen($filename, 'a');
    fwrite($handle, $stringToWrite . PHP_EOL);
    fclose($handle);
}

function logMessage($logLevel, $message)
{
    $filename = "log-" . date('Y-m-d') . ".log";

    $stringToWrite = date("Y-m-d H:i:s") . " [" . $logLevel . "] " . $message;

    append($filename, $stringToWrite);
}



function logInfo($message)
{
    logMessage("INFO", $message);
}

function logError($message)
{
    logMessage("ERROR", $message);
}

logInfo("See you at the coding challenge...");
logError("See you tomorrow :)");