<?php

/**
* iPHPLib v0.1
* @author Andre Liebich
* @copyright Andre Liebich
* @type create and use logs
* @access public 
*/

/**
* Log-class
*/
 
class Log
{
	
	/**
	* Add a line in the Log
	* @params $m Message
	*/
	
	public function add($m){
		$u = new Config; // get info from config.php
		$file = fopen($u->log_save_dir."/".date("d-m-Y").".txt", "a"); // create if not exists
		$m = date("d-m-Y H:i:s")." - ".$m."\r\n";  
		if(fputs($file, $m)){
		  return true; // return true on success
		}else{
		  return false; // return false on error
		}
		fclose($file);
	}
	
	/**
	* Delete a Log
	* @return true on success
	* @return false on cancelled
	*/
	
	public function del($f){
		if(file_exists($f)){
			unlink($f);
			return true;
		}else{
			return false;
		}
	}

}

?>
