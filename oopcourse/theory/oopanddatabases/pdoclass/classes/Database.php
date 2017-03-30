<?php

class Database {
	private $host   = 'localhost';
	private $user   = 'mybloguser';
	private $pass   = '123456';
	private $dbname = 'myblog';
	
	private $pdo;
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
			$this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
		} catch(PDOException $e) {
			$this->error = 'Error conecting to the database'. $e->getMessage();
			echo $e->getMessage();
			
		}
	}
	
	public function query($query) {
		$this->stmt = $this->pdo->prepare($query);// create prepared statement and return pdo statement object and save it in the stmt variable
	}
	
	public function bind($param, $value, $type = null) { //method to send value to prepared statement
		if (is_null($type)) {
			switch(true){
				case is_int($value): //We set how nind value goes to the database
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOLL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);			
	}
	public function execute(){ // method to execute query with supplied value
		return $this->stmt->execute();
	}
	
	public function resultset(){ // method to handle result set-return associative array
	      $this->execute();
		  return $this->stmt->fetchAll(PDO::FETCH_ASSOC);// code to fetch data 
	}
}
		