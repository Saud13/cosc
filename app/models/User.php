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
            $att = 1;
            $statement = $db->prepare("select * from tracking
                                WHERE Username = :name;");
            $statement->bindValue(':name', $this->username);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            $atts = $rows[0]['attempt'];

            if ($atts >= 3) {
                sleep(55);
                $statement = $db->prepare("UPDATE tracking SET attempt = :att WHERE Username = :user");
                $statement->bindValue(':user', $this->username);
                $statement->bindValue(':att', 0);
                $statement->execute();
                $this->auth = false;
            } else if ($rows) {
                $att = $atts + 1;
                $statement = $db->prepare("UPDATE tracking SET attempt = :att WHERE Username = :user");
                $statement->bindValue(':user', $this->username);
                $statement->bindValue(':att', $att);
                $statement->execute();
            } else {

                $statement1 = $db->prepare("INSERT INTO tracking (Username, attempt)"
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

        if (strlen($password) >= 8 && (strlen($password) <= 18)) {

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
            echo "Password strength must be between 8-16"; //message for user
            header('Refresh:5; url= /login/register'); // refresh page after 5 secs}
        }
    }

}
