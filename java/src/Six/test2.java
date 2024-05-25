package app;

import java.util.Scanner;

public class test2 
{
	public static void main(String[] args) 
	{
		CompteBancaire c1;
		CompteBancaire c2;
		c1= new CompteBancaire("Sanou",00);
		String a;
		double b;
		Scanner lectureClavier=new Scanner (System.in);
		System.out.println("entrer le nom du titulaire");
		a=lectureClavier.nextLine();
		System.out.println("entrer le solde du titulaire");
		b=lectureClavier.nextDouble();
		c2=new CompteBancaire(a,b);
		System.out.println(c2.getName());
		System.out.println(c2.getSolde());
		System.out.println("entrer la valeur a crediter");
		c2.crediter(lectureClavier.nextDouble());
		System.out.println("Relevé compte :" +"\n nom titulaire:"+c2.getName() +"\n solde:" +c2.getSolde());
		System.out.println("entrer la valeur a debiter");
		c2.debiter(lectureClavier.nextDouble());
		System.out.println("Relevé compte :" +"\n nom titulaire:"+c2.getName() +"\n solde:" +c2.getSolde());
	}
}
