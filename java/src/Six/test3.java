package app;

import java.util.*;
public class test3 
{
	public static void main(String[] args) 
	{
	rectangle rec1;
	rec1= new rectangle(10,15,"rouge");
	System.out.println(rec1.perimetre());
	System.out.println(rec1.surface());
	rec1.afficherCouleur();
	rec1.setCouleur("blanc");
	System.out.println(rec1.getLargeur());

	
	
	}
}
