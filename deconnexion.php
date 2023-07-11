<?php
include('connexion.php');
session_start(); // Démarrez la session
session_destroy();
header("location:ficheconnexion.php");
exit();
?>