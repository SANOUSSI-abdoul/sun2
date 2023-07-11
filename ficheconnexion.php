<?php 

if (!isset($_SESSION['id_utilisateur'])) {
    header("Location: connexion.php");
    exit();}
?>

<!doctype html>

<html lang="fr">
<style>
		body { 
      background-image:
      url(imagepro/im1.jpg);
}a:active {
  text-shadow: none;
}

input { 
  border: none;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  padding: 1rem;
  width: 200px;
  border-radius: 50px;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  -moz-backdrop-filter: blur(5px);
  box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
  font-weight: 500;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  transition: all .3s;
  margin-bottom: 2em;

}
</style>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
  

    <!-- Site Meta -->
    <title>NUCLEO</title>

    <meta name="keywords" content="webwags gabriel sene 774000424">
    <meta name="description" content="Gestion article scolaire cours sacré coeur dakar senegal">
    <meta name="author" content="Gabriel SENE 77 400 04 24">

 
   
</head>

<body>

 <form action="verification1.php" method="POST">
                <br/><br/>
                
                <center>
                <table align="center">
                    <tr width="100%">
                    <td>
                <br><br><br><br>
                <input type="text"  placeholder="Identifiant" name="username" style="color:blue" required default selected>
                    </td>
                    </tr>
                    <tr width="100%">
                    <td></br>
                    
                <input type="password" placeholder="Mot de passe" name="password" style="color:blue" required><br/>
                    </td>
                    </tr>
                    <tr width="100%">
                    <td></br>
                <input type="submit" id='submit' value='CONNEXION'>
                </td><br><br><br>
                    </tr>
                </table></center>
                <?php
                if (isset($_GET['erreur'])) {
                    $err = $_GET['erreur'];
                    if ($err == 1 || $err == 2)
                        echo "<center><h2>Utilisateur ou mot de passe incorrect</h2></center>";
                    if ($err == 3)
                        echo "<center>Vous devez être connecté</center>";
                }
                ?>

            </form>
            
    


</body>

</html>