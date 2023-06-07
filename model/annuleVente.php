<?php
include 'connexion.php';

if (!empty($_GET['idVente']) && !empty($_GET['idArticle']) && !empty($_GET['quantite'])) {
    // Suppression de la vente
    $sql = "DELETE FROM vente WHERE id = ?";
    $req = $connexion->prepare($sql);
    $req->execute(array($_GET['idVente']));
    
    
}
header('Location: ../vue/vente.php');
