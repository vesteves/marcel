<?php

/**
* Desafio 4: Transforme esse código terrivel num código seguro
*/

echo "<!doctype html>\n";

set_error_handler('exceptions_error_handler');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
    if (error_reporting() == 0) {
        return;
    }
    if (error_reporting() & $severity) {
        throw new ErrorException($message, 0, $severity, $filename, $lineno);
    }
}


try{
    $username = $_GET['username'] ? $_GET['username'] : $argv[1];
    $password = $_GET['password'] ? $_GET['password'] : $argv[2];
}catch(Exception $error){
    echo "No Username or password given";
    exit;
}


//Database up
$pdo = new PDO('sqlite::memory:');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->exec("DROP TABLE IF EXISTS users");
$pdo->exec("CREATE TABLE users (username VARCHAR(255), password VARCHAR(255))");
$rootPassword = password_hash("secret", PASSWORD_DEFAULT);
$pdo->exec("INSERT INTO users (username, password) VALUES ('root', '$rootPassword');");


//Login Logic
$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
$statement->bindParam(":username", $username, PDO::PARAM_STR);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);


if ($user && password_verify($password, $user['password'])) {
    echo "Access granted to $username!<br>\n";
} else {
    echo "Access denied for $username!<br>\n";
}
