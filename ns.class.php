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
  
}
