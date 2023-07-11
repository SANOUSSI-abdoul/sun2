<?php
include 'connexion.php';
if (
    !empty($_POST['nom'])
    && !empty($_POST['prenom'])
    && !empty($_POST['email'])
    && !empty($_POST['mot_de_passe'])
) {

$sql = "INSERT INTO utilisateur(nom, prenom, email,mot_de_passe)
        VALUES(?, ?, ?,?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['mot_de_passe']
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "utilisateur ajouté avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Une erreur s'est produite lors de l'ajout de l'utilisateur";
        $_SESSION['message']['type'] = "danger";
    }

} else {
    $_SESSION['message']['text'] ="Une information obligatoire non renseignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: utilisateur.php');