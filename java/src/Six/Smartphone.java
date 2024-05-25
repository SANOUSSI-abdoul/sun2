package Six;

public class Smartphone 
{
private String brand;
private String model;
private String phoneNumber ;

public Smartphone(String Brand, String model, String phoneNumber)
{
	this.brand=Brand;
	this.model=model;
	this.phoneNumber=phoneNumber;
}
public String getBrand() 
{
return brand;	
}
public String getPhoneNumber() 
{
return phoneNumber;	
}
public String getModel() 
{
return model;	
}
public void SetPhoneNumber(String newPhoneNumber) 
{
 phoneNumber=newPhoneNumber;	
}
public void display1()
{
System.out.println("the brand is"+brand+"the model is"+model+"the number"+phoneNumber);	
}
}
