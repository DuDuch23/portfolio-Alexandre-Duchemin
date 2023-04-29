<?php

$user = "116313_aduchemin";
$pass = "Mushu4monchat?";
$dbName = "lyceestvincent_aduchemin";

try{
    $con = new \PDO("mysql:host=mysql-lyceestvincent.alwaysdata.net;dbname=$dbName;charset=UTF8", $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $exception)
{
    echo 'Erreur lors de la connexion à la base de données : ' . $exception->getMessage();
    exit;
}

?>