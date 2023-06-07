<?php 
include 'entete.php';

if(!empty($_GET['id'])){
    $client = getClient($_GET['id']);
}
?>

<div class="home-content">
    <div class = >
        <div class = "box">
            <form action=" <?= !empty($_GET['id'])? "/gstock/model/modifClient.php" : "/gstock/model/ajoutClient.php" ?> "  method="post">
                <label for="nom">Nom</label>
                <input value="<?= !empty($_GET['id'])? $client['nom'] : "" ?> " type="text" name="nom" id="nom" placeholder="Saisir le nom">
                <input value="<?= !empty($_GET['id'])? $client['id'] : "" ?> " type="hidden" name="id" id="id" >
                
                <label for="prenom">Prénom</label>
                <input value="<?= !empty($_GET['id'])? $client['prenom'] : "" ?> " type="text" name="prenom" id="prenom" placeholder="Saisir le prénom">
                

                <label for="telephone">Téléphone</label>
                <input value="<?= !empty($_GET['id'])? $client['telephone'] : "" ?>" type="text" name="telephone" id="telephone" placeholder="Saisir le numéro">

                <label for="adresse">Adresse</label>
                <input value="<?= !empty($_GET['id'])? $client['adresse'] : "" ?>" type="text" name="adresse" id="adresse" placeholder="Saisir l'adresse">

                <button type="submit">Valider</button>
                
                <?php
                if(!empty($_SESSION['message']['text'])){
                ?>
                    <div class="alert <?=$_SESSION['message']['type']?>">
                        <?=$_SESSION['message']['text']?>
                    </div>
                <?php
                } 
                ?>
            </form>
        </div>
        <div class="box">
            <table class="mtable">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Action</th>
                </tr>
                <?php
                $clients = getClient();
                    
                if(!empty($clients) && is_array($clients)){
                     foreach($clients as $key=>$value){
                    ?>
                    <tr>
                        <td><?= $value['nom'] ?></td>
                        <td><?= $value['prenom'] ?></td>
                        <td><?= $value['telephone'] ?></td>
                        <td><?= $value['adresse'] ?></td>
                        <td><a href="?id=<?= $value['id'] ?>"><i class='bx bx-edit-alt'></td>
                     </tr>
                    <?php
                        }
                    }
                    ?>
            </table>
        </div>
    </div>
</div>
</section>
    
<?php 
include 'pied.php';
?>
