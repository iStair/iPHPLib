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
	
	public $log_save_dir; // Save dir for log

	/**
	* Initializing
	*/
	
	function __construct(){
		$this -> log_save_dir = $_SERVER['DOCUMENT_ROOT']; // Setup the log-save-dir
	}

}

?>
