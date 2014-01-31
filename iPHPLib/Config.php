<?php

/**
* iPHPLib v0.1
* @author Andre Liebich
* @copyright Andre Liebich
* @type Config
* @access public 
*/

class Config 
{

	/**
	* all public vars
	*/
	
	public $log_save_dir; // save dir for log

	/**
	* Initializing
	*/
	
	function __construct(){
		$this -> log_save_dir = __DIR__."/Log"; // create the log in the "Log" folder
	}

}

?>
