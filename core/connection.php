<?php  
/*
  ./core/connexion.php 
  CREATION INSTANCE PDO $conn
 */

$dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
$param = array(PDO::MSQUL_ATTR_INIT_COMMAND => 'SET NAMES utf8');


try {
    $conn = new PDO($dsn,USERNAME,USERPWD,$param);

} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}