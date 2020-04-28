<?php /**
* Brutal error handling for development projects
* @link https://github.com/kktsvetkov/brutalno
*/

function brutalno($severity, $message, $file, $line)
{
	throw new \ErrorException($message, 0, $severity, $file, $line);
}

error_reporting(E_ALL);
set_error_handler('brutalno', E_ALL);
