<?php
include 'connexion.php';

if (
    !empty($_GET['idsortie ']) &&
    !empty($_GET['idArticle']) &&
    !empty($_GET['quantite'])
) {

    $sql = "UPDATE sortie  SET etat=? WHERE id=?";
    $req = $connexion->prepare($sql);
    $req->execute(array(0,$_GET['idsortie ']));

    if ($req->rowCount() != 0) {
        $sql = "UPDATE article SET quantite=quantite+? WHERE id=?";
        $req = $connexion->prepare($sql);
        $req->execute(array($_GET['quantite'],$_GET['idArticle']));

    }
}
header('Location: sortie .php');