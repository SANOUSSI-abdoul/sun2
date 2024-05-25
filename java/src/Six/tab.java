package app;

import java.util.*;
public class tab 

{
	
	public static void main(String []args) 
	{
		int a;
int b=0;
double c=0;
		int[]tab;
		tab =new int [10];
		for(int i=0;i<10;i++) 
		{
		System.out.println("entrer le"+(i+1)+"elements" );	

		Scanner lectureClavier=new Scanner (System.in);
		a=lectureClavier.nextInt();
		tab[i]=a;
		}
		for (int i=0;i<10;i++)
		{
			System.out.println(tab[i]);
			b=b+tab[i];
			
		}
c=(double)b/10;
System.out.println("la somme est"+b+"la moyenne est"+c);
	}

}
