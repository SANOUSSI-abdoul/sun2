

public class SailingShip extends boat
{
	private double sailsArea;
	public SailingShip(double size,int capacity,double sailsArea)
	{
		super(size,capacity);
		this.size=size;
		this.capacity=capacity;
		this.sailsArea=sailsArea;
	}
	public double getSailsArea() 
	{
		return sailsArea;
	}
	public boolean hasLargerSailsArea(SailingShip sailing) 
	{
	if(sailsArea>sailing.getSailsArea())	
	{
		return true;
	}
	else 
	{
		return false;
	}
	
	}
	public void afficher() 
	{
		System.out.println("the capacity is"+capacity+"the size is:"+size+"the area is"+sailsArea);
	}
}