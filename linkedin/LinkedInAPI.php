<?php

class LinkedInApi{
	private static $key;
		
	static function getKey(){
		if(!self::$key){
			$config = parse_ini_file('privateLinkedIn.php');
			self::$key = $config['key'];
		}
		return self::$key;
	}
}

?>