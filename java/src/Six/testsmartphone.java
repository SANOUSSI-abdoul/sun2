package Six;

public class testsmartphone 
{
	public static void main(String[] args) 
	{
	Employee E1;
	E1=new Employee("Idriss","Alami",2020);
	Smartphone S1;
	S1= new Smartphone("Apple","Iphone 15","457812");
	E1.setMySmartphone(S1);
	E1.display();
	}	
	
}
