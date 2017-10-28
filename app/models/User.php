<?php

class User {

    public $username;
    public $password;
    public $auth = false;
	public $fname;
	public $lname;
	public $email;
	public $att;
	public $time;
    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		$db = db_connect();
        $statement = $db->prepare("select Username, Password from users
                                WHERE Username = :name;");
        $statement->bindValue(':name', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		$hash_pwd = $rows[0]['Password'];
		$password = $this->password;
		
		if (!password_verify($password,$hash_pwd)){
			$att = $att + 1;
			$_SESSION['report'] = $_SESSION['report'] + 1;
			$db = db_connect();
			
			$statement = $db->prepare("INSERT INTO log (Username, Attempts, Time)"
			. "VALUES (:username, :attempts, :time ); ");
			$statement->bindValue(':username',$this->$username);
			$statement->bindValue(':attempts',$this->$att);
			$statement->bindValue(':time',time());
			$statement->execute();
		}else{
			$this->auth = true;
			$_SESSION['username'] = $rows[0]['Username'];
			$_SESSION['password'] = $rows[0]['Password'];
		}
		
    }
	
	public function register ($username, $password, $fname, $lname, $email) {
		
		if(strlen($password) >= 8){
			
			$hashPass = password_hash($password, PASSWORD_DEFAULT);
			
			$db = db_connect();
			$statement = $db->prepare("INSERT INTO users (Username, Password, FirstName, LastName, Email)"
			. "VALUES (:username, :password, :firstName, :lastName, :email ); ");
				
			$statement->bindValue(':username', $username);
			$statement->bindValue(':password', $hashPass);
			$statement->bindValue(':firstName',$fname);
			$statement->bindValue(':lastName', $lname);
			$statement->bindValue(':email', $email);
			$statement->execute();
			
			$_SESSION['auth'] = true;
		}else{
			header('Location: /login/register');
		}
	}

}
