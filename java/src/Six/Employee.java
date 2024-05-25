package Six;
import java.util.ArrayList;
/**
 * @author sanou
 */
public class Employee 
{
	private String firstname;
	private String lastName;
	private int hireYear;
	private Smartphone mySmartphone;
	private ArrayList<Smartphone>liste=new ArrayList<>();
	
public Employee(String firstname, String lastname, int hireYear) 
{
this.firstname=firstname;
this.lastName=lastname;
this.hireYear=hireYear;
}
public String getLastname()
{
return lastName;	
}
public String getFirstname()
{
return firstname;	
}
public int getHireYear()
{
return hireYear;	
}
public void setLastName(String newLastName) 
{
this.lastName=	newLastName;
}
public void setMySmartphone(Smartphone newSmartphone) 
{
mySmartphone=newSmartphone;
}
public int calculateSeniority(int currentYear) 
{
	return currentYear-hireYear;
}
public void deleteSmartphone(Smartphone tel) 
{
	liste.remove(tel);
}
public void addSmartphone( Smartphone newSmartphone) 
{
liste.add(newSmartphone);
}
public int countByBrand(String Brand) 
{
	int count=0;
	for(int i=0;i<liste.size();i++) 
	{
		if(Brand==liste.get(i).getBrand()) 
		{
			count=1+count;
		}
	}
return count;
}

public void display() 
{
System.out.println("firstname is:"+firstname+"lastname is"+lastName+"hire year is"+hireYear+"Smartphone is");	
mySmartphone.display1() ;
}



}
