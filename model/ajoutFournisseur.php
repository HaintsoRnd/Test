<?php
include 'connexion.php';

if(!empty ($_POST['nom']) 
    && !empty ($_POST['prenom'])
    && !empty ($_POST['telephone'])
    && !empty ($_POST['adresse'])){
$sql = "INSERT INTO fournisseur(nom,prenom,telephone,adresse)
        VALUES(?, ?, ?, ?)";
    $req=$connexion->prepare($sql);
  
    $req->execute(array(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['telephone'],
        $_POST['adresse']
        ));

    if($req->rowCount()!=0){
        $_SESSION['message']['text']= "Fournisseur ajouté avec succès";
        $_SESSION['message']['type']= "success";

    }else{
        $_SESSION['message']['text']= "Une erreur s'est produite lors de l'ajout du Fournisseur";
        $_SESSION['message']['type']= "danger";
    }

}else{
    $_SESSION['message']['text']= "Une information obligatoire non renségnée";
    $_SESSION['message']['type']= "danger";
}

header('Location: /gstock/vue/fournisseur.php');