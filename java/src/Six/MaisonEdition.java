package Six;

import java.util.ArrayList;

public class MaisonEdition 
{
private String nomMaison;
public Livre livre;
 private ArrayList<Livre>liste = new ArrayList<>();

public MaisonEdition(String nomMaison)
{
this.nomMaison=nomMaison;	
}
public ArrayList getListelivres() 
{
 return liste;
}
public void ajouterLivre(Livre livre) 
{
liste.add(livre);	
}
public void afficher()
{
System.out.println("le nom de la maison est  :"+nomMaison+"la liste des livre est :");
 getListelivres();
}
}
