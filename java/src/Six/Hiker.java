package Six;

import java.util.ArrayList;

public class Hiker
{
	int b=0;
	double a = 0;
private String name;
private String surname;
private ArrayList<Item> Liste= new ArrayList<>();
public Hiker( String name , String surname)
{
this.name=name;
this.surname=surname;
}
public int numberOfBottle() 
{
	
	for(int i=0;i<Liste.size();i++) 
	{
		if(Liste.get(i).isInBootle()==true) 
		{
		b=b+1;	
		}
		
	}
	System.out.println("test "+b);
	return b;
}
public double calculateTotalItemsWeight() 
{
	
	for(int i=0;i<Liste.size();i++) 
	{
		a=Liste.get(i).getWeight()+a;
	}
	System.out.println("test1"+a);
	return a;
}
public void addItem(Item item) 
{
	Liste.add(item);
}
public void display() 
{
	System.out.println("son nom est"+name+"prenom"+surname);
}

}
