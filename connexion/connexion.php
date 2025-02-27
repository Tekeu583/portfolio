<?php
$serveur="localhost";
$user = "root";
$bd ="portfolio";
$motpasse='';
$port="3306";
try{
$conn= new PDO("mysql:host=$serveur;port=$port;dbname=$bd;charset=utf8", $user, $motpasse);
$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING);
} catch(PDOException $e){
    echo "Erreur de connexion :" .$e->getMessage();
}
?>