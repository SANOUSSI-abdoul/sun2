package Six;

public class Food extends Item
{
private boolean isLiquid;
private int calories;
public Food(String designation,double weight,boolean isLiquid,int calories) 
{
super( designation,weight);	
this.calories=calories;
this.isLiquid=isLiquid;
}
public boolean isInBootle()
{
if(isLiquid==true) 
{
return true;	
}	
else
	return false;
}
public void display() 
{
	System.out.println("son nom est"+designation+"poids"+weight+"dans la bouteille"+isLiquid);
}
}
