package app;

public class Pumpkin
{
 private int diameter;
 private double basePrice;
 private boolean isCarved;
 
 public Pumpkin(int diameter,double basePrice,boolean isCarved) 
{
this.diameter=diameter;
this.basePrice=basePrice;
this.isCarved=isCarved;
}

 public double calculateSellPrice()
 {
	 if(isCarved==true) 
	 {
		
		 return 2*basePrice;
	 }
	 else 
	 {
		 return basePrice;
	 }
  
 } 
 public void setDiameter(int theNewDiameter )
 {
  diameter=theNewDiameter;	 
 }
 
 public void  displayPumpkin()
 {
 System.out.println("le diam est"+diameter+"le prix est" +calculateSellPrice()+ "taillée?"  +isCarved);	 
 }
 
 
 
 
 
 
 
}