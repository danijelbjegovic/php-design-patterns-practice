<?php

class Database {
	private static $instance;
	
	public static function getInstance(){
		if(!isset(Database::$instance))
			Database::$instance = new Database;

		return Database::$instance;
	}
	
	private function __construct() {
		
	}
	
	public function getQuery(){
		return "SELECT * FROM some_table";
	}
	
}


$db = Database::getInstance();
$db1 = Database::getInstance();
$db2 = Database::getInstance();

var_dump($db);
var_dump($db1);
var_dump($db2);