<?php

class LinkedInApi{
	private static $key;
		
	static function getKey(){
		if(!$this->key){
			$this->key = parse_ini_file('privateLinkedIn.php')['key'];
		}
		return $this->key;
	}
}


?>