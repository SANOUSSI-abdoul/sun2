<?php
include 'entete.php';
if (!empty($_GET['id'])) {
    $client = getutilisateur($_GET['id']);
}
?>

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action=" <?= !empty($_GET['id']) ?  "modifutilisateur.php" : "ajoututilisateur.php" ?>" method="post">
                <label for="nom">Nom</label>
                <input value="<?= !empty($_GET['id']) ?  $client['nom'] : "" ?>" type="text" name="nom" id="nom" placeholder="Veuillez saisir le nom">
                <input value="<?= !empty($_GET['id']) ?  $client['id'] : "" ?>" type="hidden" name="id" id="id" >
                
                <label for="prenom">Prénom</label>
                <input value="<?= !empty($_GET['id']) ?  $client['prenom'] : "" ?>" type="text" name="prenom" id="prenom" placeholder="Veuillez saisir le prénom">
    
                <label for="adresse">Adresse Mail</label>
                <input value="<?= !empty($_GET['id']) ?  $client['email'] : "" ?>" type="text" name="email" id="email" placeholder="Veuillez saisir l'adresse mail">

                <label for="mot_de_passe">mot de passe</label>
                <input value="<?= !empty($_GET['id']) ?  $client['mot_de_passe'] : "" ?>" type="text" name="mot_de_passe" id="mot_de_passe" placeholder="Veuillez saisir le mot de passe">


                <button type="submit">Valider</button>

                <?php
                if (!empty($_SESSION['message']['text'])) {
                ?>
                    <div class="alert <?= $_SESSION['message']['type'] ?>">
                        <?= $_SESSION['message']['text'] ?>
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
                    <th>Adresse Mail</th>
                </tr>
                <?php
                $clients = getutilisateur();

                if (!empty($clients) && is_array($clients)) {
                    foreach ($clients as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['nom'] ?></td>
                            <td><?= $value['prenom'] ?></td>
                            <td><?= $value['email'] ?></td>  
                        </tr>
                <?php

                    }
                }
                ?>
            </table>
        </div>
    </div>
<?php
include 'pied.php';
?>