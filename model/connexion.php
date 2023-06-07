<?php
session_start();

$nom_serveur="localhost";
$nom_bd="gestion_stock_leptit";
$utilisateur="root";
$motpass="";

try{
    $connexion= new PDO("mysql:host=$nom_serveur;dbname=$nom_bd",$utilisateur,$motpass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $connexion;

}catch (Exception $e){
    die("Erreur de connexion : ". $e->getMessage());
}

?>