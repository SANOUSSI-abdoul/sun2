  package Six;

import java.util.ArrayList;
import java.util.Scanner;

public class testf 
{
	
	public static void main(String[] args) 
	{
		int a;
		String b;
		Directory D1=new Directory("dossier", 0, 0);
		File F1=new File("fichier","code",5 );
		ArrayList<File>liste=new ArrayList<>();
		Scanner lectureClavier=new Scanner (System.in);
		do
		{
			System.out.println("1-Ajouter un fichier au répertoire");
			System.out.println("2-Afficher la taille du répertoire");
			System.out.println("3-Afficher le nombre de fichiers du répertoire");
			System.out.println("4-Renommer le répertoire");
			System.out.println("5-Quitter");
			a=lectureClavier.nextInt();
			switch(a)
			{
			case 1:
			    D1.setFile(F1);
			    break;
			  case 2:
				  System.out.println(" la taille du répertoire est"+D1.getsize());
			    break;
			  case 3:
				  System.out.println("le nombre de fichiers du répertoire est"+D1.getnumb());
				    break;
			  case 4:
				  System.out.println("Renommer le répertoire");
				  b=lectureClavier.nextLine();
				    break;
			  case 5:
				    // instructions à exécuter si variable == valeur2
				    break;
			  default:
			    // instructions à exécuter si variabl
				 break;
			}
		}
		while(a!=5);
		
		
		
	}	
	


}
