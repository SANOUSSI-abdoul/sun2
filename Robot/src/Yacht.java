public class Yacht extends boat
{
private double enginePower;
public Yacht(double size,int capacity, double enginePower) 
{
super(size,capacity);
this.size=size;
this.capacity=capacity;
this.enginePower=enginePower;
}
public void afficher() 
{
	System.out.println("the capacity is"+capacity+"the size is:"+size+"the engine Power is"+enginePower);
}
}