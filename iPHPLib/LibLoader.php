<?php

/**
* iPHPLib v0.1
* @author Andre Liebich
* @copyright Andre Liebich
* @type main-class
* @access public 
*/

/**
* Use Autoload
*/

try {
	if(file_exists(__DIR__."/Natives/Autoload.php")){
		require_once __DIR__."/Natives/Autoload.php";
	}else{
		throw new Exception("Autoload can't load."); // Output Error 
	}
}catch(Exception $e){
	echo $e->getMessage();
}

/**
* main-class
*/

class iPHPLib
{

	/**
	* all public vars
	*/
	
	public $log;
	public $random;
	
	/**
	* Initializing
	*/
	
	function __construct(){
		$this -> log = new Log; // Loading Log
		$this -> random new Random;
	}

}

?>
