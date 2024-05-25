/**
 * Programme principal avec la m�thode main
 * @author D�partement TIC - ESIGELEC
 * @version 2.1
 */
public class SimulateurAppX {

	public static void main(String[] args) {
		// création de l'environnement et récupération du terrain
		Terrain t = Environnement.creerEnvironnement(10,10);
		// creation du robot
		Robot robot = new Robot(0,0,"sud",100.00);
		// ajout du robot sur le terrain
		t.ajouterRobot(robot);
		//ajouter tous les murs avec une porte à une position aléatoire
		
		//Un simulateur de robot d’intervention en environnement hostile 2023-2024
		//ajouter tous les murs avec deux portes à des positions aléatoires
		t.ajouterObstaclesAleatoiresIsolesAvecBords(7);
		//t.ajouterTousLesMursDeuxPortes();
		//ajouter une victime à la colonne 9 aléatoirement
		t.ajouterVictimePositionAleatoireColonne9();
		//met à jour les composants graphiques
		t.updateIHM(); 
		//à compléter
	
		robot.setVitesse(10);
		
		do 
		{
			robot.avancerAvecConsommation();
			if(robot.isObstacleDevantAvecConsommation()==true) 
			{
				if(robot.getColonne()%2!=0) 
				{
				robot.tournerDroiteAvecConsommation();
				if(robot.isObstacleDevantAvecConsommation()==true) 
				{
					robot.tournerDroiteAvecConsommation();
				}
				robot.avancerAvecConsommation();
				robot.tournerDroiteAvecConsommation();
				}else 
				{
					robot.tournerGaucheAvecConsommation();
					if(robot.isObstacleDevantAvecConsommation()==true) 
					{
						robot.tournerGaucheAvecConsommation();
					}
					robot.avancerAvecConsommation();
					robot.tournerGaucheAvecConsommation();
	;			}
			}
		}while( robot.getbatterie()>0 || (robot.getColonne()!=9 && robot.getLigne()!=0)) ;
	   
		  
			
		
		
		
		
		
		
	}

}
