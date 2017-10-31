<?php

$att = 1;
$db = db_connect();
$statement = $db->prepare("select * from my_log
                                WHERE Username = :name;");
$statement->bindValue(':name', $_SESSION['username']);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($rows) {
    $atts = $rows[0]['Attempts'];
    $att = $atts + 1;
    $statement = $db->prepare("UPDATE my_log SET Attempts = :att WHERE Username = :user");
    $statement->bindValue(':user', $_SESSION['username']);
    $statement->bindValue(':att', $att);
    $statement->execute();
} else {
    $statement1 = $db->prepare("INSERT INTO my_log (Username, Attempts)"
            . "VALUES (:username, :attempts); ");
    $statement1->bindValue(':username', $_SESSION['username']);
    $statement1->bindValue(':attempts', $att);
    $statement1->execute();
}

session_destroy();
header('location:/');
?> 
