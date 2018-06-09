<?php

class Database {
	// Database parameters
	private $host = 'localhost';
	private $db_name = 'blog';
	private $username = 'root';
	private $password = '123456';
	private $conn;
	
	// Database connection
	public function connect(){
		$this->conn = null;
		
		try{
			$this->conn = new PDO('mysql:host=' . $this->host .  ';dbname=' . $this->dbname, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			echo 'Connection Error: ' .  $e->getMessage();
		}
		
		return $this->conn;
	}
}

?>