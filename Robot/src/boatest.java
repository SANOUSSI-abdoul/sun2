
public class boatest 
{
	public static void main(String[] args) 
	{
		SailingShip v1=new SailingShip(6.5,8,7.5);
		SailingShip v2=new SailingShip(9.5,10,12.5);
		Yacht y1=new Yacht(20,20,1200);
		y1.afficher();
		if(v1.hasLargerSailsArea(v2)==true) 
		{
			v1.afficher();
		}
		else 
		{
		 v2.afficher();	
		}
		
	    
	}
	
	
}
