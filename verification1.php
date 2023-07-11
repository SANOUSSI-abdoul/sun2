
<?php
   

      session_start();
    
   
if(isset($_POST['username']) && isset($_POST['password']))
{
include'connexion1.php';

	
    $username = $_POST['username']; 
    $password = $_POST['password'];
	
    
    
    if($username !== "" &&  $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
			email = '".$username."' AND mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($connexion1,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
	
			
           header('Location: dashboard.php');
			
			{
  				die("ERREUR !!!");
			}

        }
        else
        {
           header('Location: ficheconnexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: ficheconnexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ficheconnexion.php');
}
mysqli_close($connexion1); // fermer la connexion
    
?>