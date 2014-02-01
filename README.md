iPHPLib
=======

The fastest, safest and most stable PHP-library in the world.

How to use?
=======

Open the iphplib.php and you see a simple code for using this lib.

All commands
=======

$p = new iPHPLib;

$p->log->add("hello"); // add hello to the logfile of this day and create when the file does not exists<br />
$p->log->del("path"); // delete a file from the current path<br />
$p->random->get_letter(); // generate a letter from a-z or A-Z<br />
$p->random->get_letter_small(); // generate a letter from a-z<br />
$p->random->get_letter_big(); // generate a letter from A-Z<br />
$p->random->get_special(); // generate specialchars and html-chars are escaped
