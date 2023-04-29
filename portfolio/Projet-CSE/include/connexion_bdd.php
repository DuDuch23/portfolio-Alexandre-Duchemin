<?php
$user = "root";
$pass = "";
$dbName = "cse";

try{
    $con = new \PDO("mysql:host=127.0.0.1;dbname=$dbName;charset=UTF8", $user, $pass);
    $con->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
}
catch (PDOException $exception)
{
    echo 'Erreur lors de la connexion à la base de données : ' . $exception->getMessage();
    exit;
}
?>