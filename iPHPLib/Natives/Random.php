<?php

/**
* iPHPLib v0.1
* @author Andre Liebich
* @copyright Andre Liebich
* @type generate random letters
* @access public 
*/

class Random
{

	/**
	* public vars
	*/
	
	public $letter_small;
	public $letter_big;
	public $special;
	
	/**
	* initializing 
	*/
	
	function __construct(){
		$this -> letter_small = array("a", "b", "c", "d", "e", "f", "g", 
								"h", "i", "j", "k", "l", "m", "n", "o", 
								"p", "q", "r", "s","t", "u", "v", "w", "x", "y", "z");
								
		$this -> letter_big = array("A", "B", "C", "D", "E", "F", "G", 
								"H", "I", "J", "K", "L", "M", "N", "O", 
								"P", "Q", "R", "S","T", "U", "V", "W", "X", "Y", "Z");
								
		$this -> letter_all = array("A", "a", "B", "b", "C", "c", "D", 
								"d", "E", "e", "F", "f", "G", "g", "H", 
								"h", "I", "i", "J","j", "K", "k", "L", "l", 
								"M", "m", "N", "n", "O", "o", "P", "p", "Q", 
								"q", "R", "r", "S", "s", "T", "t", "U", "u", "V",
								"v", "W", "w", "X", "x", "Y", "y", "Z", "z");
								
		$this -> special = array("!", "-", "_", ".", ":", ";", ",", "+", 
								"~", "?", ")", "(", "/", "&amp;", "%", "$", 
								"§", "=", "}", "{", "[", "]", "*", "'", "#", 
								"|", "&lt;", "&gt;", "&copy;", "`", "´", "^", "°");
	}
	
	/**
	* @return string a-z
	*/
	
	public function get_letter_small(){
		$u = rand(0,25);
		return $this->letter_small[$u];
	}
	
	/**
	* @return string A-Z
	*/
	
	public function get_letter_big(){
		$u = rand(0,25);
		return $this->letter_big[$u];
	}
	
	/**
	* @return string a-Z
	*/
	
	public function get_letter(){
		$u = rand(0,51);
		return $this->letter_all[$u];
	}
	
	/**
	* @return string specialchar
	*/
	
	public function get_special(){
		$u = rand(0,32);
		return $this->special[$u];
	}
	
}

?>
