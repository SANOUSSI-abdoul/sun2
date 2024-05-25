package app;

public class rectangle 
{
	private double largeur;
	private double longueur;
	private String couleur;
	 
	public rectangle(double largeur,double longueur,String couleur) 
	{
		this.largeur=largeur;
		this.longueur=longueur;
		this.couleur=couleur;
	}
	public double perimetre()
	{
		return 2*(longueur+largeur);
	}
	public double surface()
	{
	this.largeur=largeur;
	this.longueur=longueur;
	double surface= largeur*longueur;
	return surface;
	}
	public void afficherCouleur()
	{
	
	System.out.println(couleur);	
	}
	public void setCouleur( String nouvelleCouleur)
	{
	couleur=nouvelleCouleur;
	}	
	public double getLargeur() 
	{
		return largeur;
	}
	
}
