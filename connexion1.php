<?php
$connexion1 = mysqli_connect("localhost", "sun", "maliki1624", "gestion_stock");
mysqli_set_charset($connexion1,"utf8");
if (mysqli_connect_errno()) {
    echo "Echec de la connexion: " . mysqli_connect_error();
    exit();
}