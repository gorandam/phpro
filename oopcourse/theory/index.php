<?php


class User{
	private $id;
	private $username;
	private $email;
	private $password;
	
	public function __construct($username, $password) {
		$this->username = $username;
		$this->password = $password;
	
	}
	public function register(){
		echo 'User Registered';
	}

	public function login () {
		$this->auth_user();
	
	}
	public function auth_user(){
		echo $this->username . ' is authenticated';
	}
	
	public function __destruct() {
		//echo 'Destructor Called';
	}
	
}

//$User = new User('brad', '1234');
//echo $User->username;

//$User->register();
//$User->login();


class Post{
	private $name;
	
	public function __set($name, $value) {
		echo 'Setting '.$name. ' to <strong>' .$value. '</strong><br />';
		$this->name = $value;
	}
	public function __get($name) {
		echo 'Getting ' .$name.' <strong>'. $this->name . '</strong><br />';
	}
	public function __isset($name) {
		echo 'Is '. $name. 'set?<br />';
		return isset($this->name);
	}
	
}

//$post = new Post;
//$post->name = 'Testing';
//echo $post->name;
//var_dump(isset($post->name));

class First {
	public $id= 23;
	private $name = 'John Doe';
	
	public function saySomething($word) {
		echo $word;
	}
	
}


class Second extends First {
	public function getName(){
		echo $this->name;
	}
	
}

$second = new Second;

//echo $second->name;

// echo $second->saySomething('Hello');

 $second->getName();