<?php

/**
* iPHPLib v0.1
* @author Andre Liebich
* @copyright Andre Liebich
* @type Including Classes
* @access public 
*/

/**
* All Files they can used by autoload
*/

$GLOBALS['load_class'] = array(
	'Config' => '../Config.php', // Config
	'Log' => 'Log.php' // Log
);
 
/**
* Autoload-Function
* @params $class the class they will autoload
*/

function __autoload($class) {
  if(isset($GLOBALS['load_class'][$class])) {
    try{
		if(file_exists(__DIR__."/".$GLOBALS['load_class'][$class])){
			require_once __DIR__."/".$GLOBALS['load_class'][$class];
		}else{
			throw new Exception("Autoload can't load this File."); // Output Error 
		}
	}catch(Exception $e){
		echo $e->getMessage();
	}
  }
}

?>
