<?php
include 'connexion.php';

if (!empty($_GET['idCommande']) && !empty($_GET['idArticle']) && !empty($_GET['quantite'])) {
    // Suppression de la commande
    $sql = "DELETE FROM commande WHERE id = ?";
    $req = $connexion->prepare($sql);
    $req->execute(array($_GET['idCommande']));
    
    
}
header('Location: ../vue/commande.php');
