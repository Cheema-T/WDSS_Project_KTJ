<?php
$hostname =  "localhost";
$username = "root";
$password = "root";
$dbname = "bookstoredbfinal";

    $dsn = "mysql:host=$hostname;dbname=$dbname";
    $options = [PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,];

    try{
        $pdo = new PDO($dsn, $username, $password, $options);
    }catch (\PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
?>
