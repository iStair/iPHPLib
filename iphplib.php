<?php

/**
* Example-Code to use the Lib.
*/

require_once 'iPHPLib/LibLoader.php'; // Include PHP-Lib

$iPHPLib = new iPHPLib; // load Lib 

$iPHPLib->log->add("hello"); // New Log with line

echo $iPHPLib->random->get_letter_small(); // return a letter from a-z

?>
