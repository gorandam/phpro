<?php

class Database {
	private $host   = 'localhost';
	private $user   = 'mybloguser';
	private $pass   = '123456';
	private $dbname = 'myblog';
	
	private $dbh;
	private $error;
	private $stmt;
	
	public function __construct() {
		// Set DSN first argument in creating new Pdo object
		$dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
		// Set options - configuring our database conection
		$options = array(
			PDO::ATTR_PERSISTENT	=> true,
			PDO::ATTR_ERRMODE		=> PDO::ERRMODE_EXCEPTION
	    );
		// Create new PDO instance
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		} catch(PDOException $e) {
			$this->error = 'Error conecting to the database'. $e->getMessage();
			echo $e->getMessage();
			
		}
	}
}
		