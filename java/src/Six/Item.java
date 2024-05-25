package Six;

public class Item 
{
protected String designation;
protected double weight ;

public Item(String designation, double weight ) 
{
	this.designation=designation;
	this.weight=weight;
}
public boolean isInBootle() 
{
	return false;
}
public double getWeight() 
{
return weight;	
}
public void display() 
{
	System.out.println("son nom est"+designation+"poids"+weight);
}

}
