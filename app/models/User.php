<?php

class User {

    public $username;
    public $password;
    public $auth = false;
    public $fname;
    public $lname;
    public $email;
    public $att;
    public $timein;

    public function __construct() {
        
    }

    public function authenticate() {
        
        $db = db_connect();
        $statement = $db->prepare("select Username, Password from users
                                WHERE Username = :name;");
        $statement->bindValue(':name', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        $hash_pwd = $rows[0]['Password'];
        $password = $this->password;

        
        if (!password_verify($password, $hash_pwd)) {
            $att = $att + 1;
            $_SESSION['report'] = $_SESSION['report'] + 1;
            
            $att = 1;
            $statement = $db->prepare("select * from my_log
                                WHERE Username = :name;");
            $statement->bindValue(':name', $this->username);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

            if ($rows) {
                $att_num_data = $rows[0]['attempt'];

                $att = $att_num_data + 1;
                $statement = $db->prepare("UPDATE my_log SET attempt = :att WHERE Username = :user");
                $statement->bindValue(':user', $this->username);
                $statement->bindValue(':att', $att);
                $statement->execute();
            } else {

                $statement1 = $db->prepare("INSERT INTO my_log (Username, attempt)"
                        . "VALUES (:username, :attempts); ");
                $statement1->bindValue(':username', $this->username);
                $statement1->bindValue(':attempts', $att);
                $statement1->execute();
            }
            $this->auth = false;
        } else {
            $this->auth = true;
            $_SESSION['username'] = $rows[0]['Username'];
            $_SESSION['password'] = $rows[0]['Password'];
           
        }
    }

    public function register($username, $password, $fname, $lname, $email) {

        if (strlen($password) >= 8) {

            $hashPass = password_hash($password, PASSWORD_DEFAULT);

            $db = db_connect();
            $statement = $db->prepare("INSERT INTO users (Username, Password, FirstName, LastName, Email)"
                    . "VALUES (:username, :password, :firstName, :lastName, :email ); ");

            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $hashPass);
            $statement->bindValue(':firstName', $fname);
            $statement->bindValue(':lastName', $lname);
            $statement->bindValue(':email', $email);
            $statement->execute();

            $_SESSION['auth'] = true;
        } else {
            echo "Password strength must be between 8-16";
            header('Refresh:5; url= /login/register');
            //header("Refresh:5; url=register.php"); 
            // header('Location: /login/register');
            
        }
    }

}
