<?php
/* 
 * NS API Class
 * @package NS-API-PHP-Class
 * @author Rick Bakker / RickB2000 @ GitHub.
 */
 
Class NS {

	private $username;
	private $password;

	public function __construct($username, $password) {
    		$this->username = $username;
 		$this->password = $password;
  	}
  
  	private function getUsername() {
		return $this->username;
	}
	 
  	private function getPassword() {
		return $this->password;
  	}
  	
  	private function cURL($url) {
  		$ch = curl_init($url);
	        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	        curl_setopt($ch, CURLOPT_USERPWD,  $this->getUsername().":". $this->getPassword());
	        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        $result = curl_exec($ch);
	        curl_close($ch);
	        return $result;
  	}
  
}
