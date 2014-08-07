<?php
/* 
 * Example file for how to use the class
 * @package NS-API-PHP-Class
 * @author Rick Bakker / RickB2000 @ GitHub.
 */
 
/*
 * Defining the username and password for the authentication at the NS API.
 */
define('USERNAME', 'xxxx');
define('PASSWORD', 'xxxx');
 
/*
 * Requiring the NS API Class.
 */
require_once('ns.class.php');

/*
 * Define an instance of the NS API Class.
 */
$ns = new NS(USERNAME, PASSWORD);
