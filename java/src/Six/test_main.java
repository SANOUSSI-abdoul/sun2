package Six;

import java.util.ArrayList;

public class test_main 
{
	public static void main(String[] args) 
	{
		ArrayList<Item> Liste= new ArrayList<>();
		Hiker h1=new Hiker("booba","dems");
			Food f1=new Food("fanta",100.00,true,350);
			Food f2=new Food("to",1000.00,false,150);
			h1.addItem(f1);
			h1.addItem(f2);
			System.out.println("nombre de bouteille"+h1.numberOfBottle());
			h1.display();
			
	}
	
}
